<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\ArticleCacheDeleteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class ArticleCacheDeleteEventListener
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
     * @param  ArticleCacheDeleteEvent  $event
     * @return void
     */
    public function handle(ArticleCacheDeleteEvent $event)
    {
        $id=$event->archive->id;
        //清除当前缓存
        Cache::forget('thisarticleinfos_'.$id);
        //获取当前栏目信息并缓存
        $thistypeinfo=Cache::remember('thistypeinfos_'.$event->archive->typeid, config('app.cachetime')+rand(60,60*24), function() use($event){
            return Arctype::where('id',$event->archive->typeid)->first();
        });
        //清除上一篇文档和下一篇文档的上下篇缓存
        $prev_id=$this->getPrevArticleId($event->archive->id);
        $next_id=$this->getNextArticleId($event->archive->id);
        Cache::forget('thisarticleinfos_prev'.$prev_id);
        Cache::forget('thisarticleinfos_next'.$prev_id);
        Cache::forget('thisarticleinfos_prev'.$next_id);
        Cache::forget('thisarticleinfos_next'.$next_id);
        //获取当前文档所属品牌并缓存
        if($event->archive->brandid && Brandarticle::where('id',$event->archive->brandid)->orderBy('id','desc')->value('id'))
        {
            //清除当前缓存
            Cache::forget('thisbrandarticleinfos_'.$event->archive->brandid);
            $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$event->archive->brandid, config('app.cachetime')+rand(60,60*24), function() use($id,$event){
                return Brandarticle::where('id',$event->archive->brandid)->first();
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
        }
        //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足
        if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
        {
            Cache::forget('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id);
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($event,$thisarticlebrandinfos){
                $brandnews=Archive::where('brandid',$event->archive->brandid)->where('id','<>',$event->archive->id)->take(10)->latest()->get(['id','title','created_at','litpic']);
                if ($brandnews->count()<10)
                {
                    $completionnews=Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',Archive::where('brandid',$event->archive->brandid)->pluck('id'))->where('id','<>',$event->archive->id)->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
                }else{
                    $completionnews=collect([]);
                }
                $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
                return $latestbrandnews;
            });
            Cache::forget('brandtypenews'.$event->archive->brandid);
            Cache::remember('brandtypenews'.$event->archive->brandid, config('app.cachetime')+rand(60,60*24), function() use($event,$latestbrandnews,$thisarticlebrandinfos){
                $notids=[];
                foreach ($latestbrandnews as $latestbrandnew)
                {
                    $notids[]=$latestbrandnew->id;
                }
                return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->pluck('id'))->whereNotIn('id',$notids)->where('id','<>',$event->archive->id)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
            });
            Cache::remember('cnewslists'.$thistypeinfo->id,  rand(10,60), function() use($thisbrandtypeinfo,$event){
                return Archive::whereIn('brandid',Brandarticle::where('typeid',$thisbrandtypeinfo->id)->latest()->pluck('id'))->where('id','<>',$event->archive->id)->take(7)->latest()->get();
            });
        }else{
            Cache::forget('thisarticleinfos_brandnews'.$event->archive->typeid);
            Cache::remember('thisarticleinfos_brandnews'.$event->archive->typeid, config('app.cachetime')+rand(60,60*24), function() use($event) {
                return Archive::where('typeid', $event->archive->typeid)->where('id','<>',$event->archive->id)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
            });

            Cache::forget('typenews'.$event->archive->typeid);
            Cache::remember('typenews'.$event->archive->typeid,  config('app.cachetime')+rand(60,60*24), function() use($event) {
                return  Archive::where('typeid', $event->archive->typeid)->where('id','<>',$event->archive->id)->take(5)->latest('created_at')->get(['id', 'title','litpic','created_at']);
            });
            //投资分类获取并缓存
            Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
                return InvestmentType::pluck('type','id');
            });
        }
        //清除列表页文档调用缓存
        Cache::forget('hotnew'.$thistypeinfo->id);
        Cache::remember('hotnew'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo,$event){
            return Archive::where('typeid',$thistypeinfo->id)->where('id','<>',$event->archive->id)->where('flags','like','%h%')->latest()->first(['id','title','litpic']);
        });
        Cache::forget('cnewtop'.$thistypeinfo->id);
        Cache::remember('cnewtop'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo,$event){
            return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->where('id','<>',$event->archive->id)->latest()->first(['title','id','description']);
        });
        Cache::forget('cnewtops'.$thistypeinfo->id);
        Cache::remember('cnewtops'.$thistypeinfo->id, 60*24*365, function() use ($thistypeinfo,$event){
            return Archive::where('typeid',$thistypeinfo->id)->where('flags','like','%'.'c'.'%')->skip(1)->where('id','<>',$event->archive->id)->take(10)->latest()->get(['id','title']);
        });
        Cache::forget('platestnews'.$thistypeinfo->id);
        Cache::remember('platestnews'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo,$event){
            return Archive::where('typeid','<>',$thistypeinfo->id)->take(7)->latest()->get();
        });
        Cache::forget('cnewslists'.$thistypeinfo->id);
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
