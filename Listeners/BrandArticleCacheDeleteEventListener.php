<?php

namespace App\Listeners;

use App\AdminModel\Acreagement;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\Events\BrandArticleCacheDeleteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class BrandArticleCacheDeleteEventListener
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
     * @param  BrandArticleCacheDeleteEvent  $event
     * @return void
     */
    public function handle(BrandArticleCacheDeleteEvent $event)
    {
        $id=$event->brandarticle->id;
        //清除当前品牌缓存数据
        Cache::forget('thisbrandarticleinfos_'.$id);
        //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
        $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$event->brandarticle->typeid,  config('app.cachetime')+rand(60,60*24), function() use($event){
            return  Arctype::where('id',$event->brandarticle->typeid)->first();
        });
        //清除当前品牌排行榜缓存 重新写入 兼容Update
        Cache::forget('phb'.$event->brandarticle->typeid);
        //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
        Cache::remember('phb'.$event->brandarticle->typeid,   config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::where('typeid',$event->brandarticle->typeid)->where('id','<>',$event->brandarticle->id)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
        });
        Cache::forget('abrandlist'.$event->brandarticle->typeid);
        Cache::remember('abrandlist'.$event->brandarticle->typeid, config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::where('mid','1')->where('typeid',$event->brandarticle->typeid)->where('id','<>',$event->brandarticle->id)->take(4)->orderBy('id','desc')->get();
        });
        Cache::forget('thisarticleinfos_latestbrands'.$event->brandarticle->typeid);
        Cache::remember('thisarticleinfos_latestbrands'.$event->brandarticle->typeid,  config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::where('typeid',$event->brandarticle->typeid)->where('id','<>',$event->brandarticle->id)->latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
        });

        Cache::forget('abrandlist'.$event->brandarticle->typeid);
        Cache::remember('abrandlist'.$event->brandarticle->typeid, config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::where('mid','1')->take(4)->where('id','<>',$event->brandarticle->id)->orderBy('id','desc')->get();
        });
        Cache::forget('phb');
        Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::take('10')->orderBy('click','desc')->where('id','<>',$event->brandarticle->id)->get(['id','brandname','litpic','brandnum','brandpay','description']);
        });
        Cache::forget('latestbrands');
        Cache::remember('latestbrands',  config('app.cachetime')+rand(60,60*24), function() use($event){
            return Brandarticle::latest()->where('id','<>',$event->brandarticle->id)->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
        });
        //店铺面积缓存
        Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
            return Acreagement::pluck('type','id');
        });
        Cache::forget('abrandlist');
        Cache::remember('abrandlist', config('app.cachetime')+60*24*365, function() use ($event){
            return Brandarticle::where('mid','1')->where('flags','like','%'.'a'.'%')->where('id','<>',$event->brandarticle->id)->take(4)->orderBy('id','desc')->get();
        });
        Cache::forget('topbrandnavs');
        Cache::remember('topbrandnavs', config('app.cachetime')+60*24*365, function() use($event){
            return Arctype::where('mid',1)->where('reid','<>',0)->orderBy('sortrank','asc')->where('id','<>',$event->brandarticle->id)->get(['real_path','typename']);
        });
        Cache::forget('topbrandnavs');
        Cache::remember('flashlingshibrands', config('app.cachetime')+rand(60,60*24), function() use($event) {
            return Brandarticle::where('mid','1')->where('flags','like','%'.'h'.'%')->where('id','<>',$event->brandarticle->id)->take(7)->orderBy('id','desc')->get();
        });
    }
}
