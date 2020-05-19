<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\ArticleCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class ArticleCacheCreateEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleCacheCreateEvent  $event
     * @return void
     */
    public function handle(ArticleCacheCreateEvent $event)
    {
        $id=$event->arcvhive->id;
        if (Archive::find($id))
        {
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('thisarticleinfos_'.$id);
            //获取当前文档并缓存
            $thisarticleinfos = Cache::remember('thisarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
                return Archive::findOrFail($id);
            });
            //获取当前栏目信息并缓存
            $thistypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                return Arctype::where('id',$thisarticleinfos->typeid)->first();
            });
            //获取文档上一篇并缓存
            Cache::remember('thisarticleinfos_prev'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$this->getPrevArticleId($thisarticleinfos->id))->first(['title','id']);
            });
            //获取文档下一篇并缓存 此时下一篇为空
            Cache::remember('thisarticleinfos_next'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$this->getNextArticleId($thisarticleinfos->id))->first(['title','id']);
            });
            //更新上一篇文档的下一篇缓存
            $prev_id=$this->getPrevArticleId($id);
            Cache::forget('thisarticleinfos_next'.$prev_id);
            Cache::remember('thisarticleinfos_next'.$prev_id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$thisarticleinfos->id)->first(['title','id']);
            });
            //获取当前文档所属品牌并缓存
            if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
            {
                //清除当前缓存 重新写入 兼容Update
                Cache::forget('thisbrandarticleinfos_'.$thisarticleinfos->brandid);
                $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                    return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
                });
            }
            //获取当前文档所属品牌分类
            if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
            {
                //清除当前缓存 重新写入 兼容Update
                Cache::forget('thistypeinfos_'.$thisarticlebrandinfos->typeid);
                //当前文档所属品牌所属分类
                $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                    return  Arctype::where('id',$thisarticlebrandinfos->typeid)->first();
                });
                Cache::forget('cnewslists'.$thistypeinfo->id);
                Cache::remember('cnewslists'.$thistypeinfo->id,  rand(10,60), function() use($thisbrandtypeinfo){
                    return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisbrandtypeinfo->id)->latest()->pluck('id'))->take(7)->latest()->get();
                });
            }
            //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足
            if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
            {
                Cache::forget('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id);
                $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$thisarticlebrandinfos){
                    $brandnews=Archive::where('brandid',$thisarticleinfos->brandid)->take(10)->latest()->get(['id','title','created_at','litpic']);
                    if ($brandnews->count()<10)
                    {
                        $completionnews=Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',Archive::where('brandid',$thisarticleinfos->brandid)->pluck('id'))->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
                    }else{
                        $completionnews=collect([]);
                    }
                    $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
                    return $latestbrandnews;
                });
                Cache::forget('brandtypenews'.$thisarticleinfos->brandid);
                Cache::remember('brandtypenews'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews,$thisarticlebrandinfos){
                    $notids=[];
                    foreach ($latestbrandnews as $latestbrandnew)
                    {
                        $notids[]=$latestbrandnew->id;
                    }
                    return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',$notids)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
                });
            }else{
                Cache::forget('thisarticleinfos_brandnews'.$thisarticleinfos->typeid);
                Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                    return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
                });
                Cache::forget('abrandlist'.$thisarticleinfos->typeid);
                 Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function(){
                    return Brandarticle::where('mid','1')->take(4)->orderBy('id','desc')->get();
                });
                Cache::forget('typenews'.$thisarticleinfos->typeid);
                Cache::remember('typenews'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                    return  Archive::where('typeid', $thisarticleinfos->typeid)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
                });
                //投资分类获取并缓存
                Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
                    return InvestmentType::pluck('type','id');
                });
            }
            //清除列表页文档调用缓存
            Cache::forget('hotnew'.$thistypeinfo->id);
            Cache::remember('hotnew'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%h%')->latest()->first(['id','title','litpic']);
            });
            Cache::forget('cnewtop'.$thistypeinfo->id);
            Cache::remember('cnewtop'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->latest()->first(['title','id','description']);
            });
            Cache::forget('cnewtops'.$thistypeinfo->id);
            Cache::remember('cnewtops'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo){
                return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->skip(1)->take(10)->latest()->get(['id','title']);
            });
            Cache::forget('platestnews'.$thistypeinfo->id);
            Cache::remember('platestnews'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
                return Archive::where('typeid','<>',$thistypeinfo->id)->take(7)->latest()->get();
            });

        }
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->orderBy('id','desc')->value('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->orderBy('id','asc')->value('id');
    }
}
