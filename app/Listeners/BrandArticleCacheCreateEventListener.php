<?php

namespace App\Listeners;

use App\AdminModel\Acreagement;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\Events\BrandArticleCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class BrandArticleCacheCreateEventListener
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
     * @param  BrandArticleCacheCreateEvent  $event
     * @return void
     */
    public function handle(BrandArticleCacheCreateEvent $event)
    {
        $id=$event->brandarticle->id;
        if ($event->brandarticle->ismake==0){
            Cache::forget('thisbrandarticleinfos_'.$id);
        }
        if (Brandarticle::find($id) && $event->brandarticle->ismake==1)
        {
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('thisbrandarticleinfos_'.$id);
            //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
            $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
                return Brandarticle::findOrFail($id);
            });
            //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
            $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return  Arctype::where('id',$thisarticleinfos->typeid)->first();
            });
            Cache::forget('abrandlist'.$thisarticleinfos->typeid);
            Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('mid','1')->where('typeid',$thisarticleinfos->typeid)->take(4)->orderBy('id','desc')->get();
            });
            Cache::forget('phb'.$thisarticleinfos->typeid);
            Cache::remember('phb'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);

            });
            Cache::forget('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid);
            Cache::remember('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });

            Cache::forget('abrandlist'.$thisarticleinfos->typeid);
            Cache::remember('abrandlist'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::where('mid','1')->take(4)->orderBy('id','desc')->get();
            });
            Cache::forget('phb');
            Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','brandpay','description']);
            });
            Cache::forget('latestbrands');
            Cache::remember('latestbrands',  config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::latest()->take(5)->orderBy('id','desc')->get(['id','brandname','brandpay','litpic','brandnum']);
            });
            //店铺面积缓存
            Cache::remember('acreagements',  config('app.cachetime')+rand(60,60*24), function(){
                return Acreagement::pluck('type','id');
            });
            Cache::forget('abrandlist');
            Cache::remember('abrandlist', config('app.cachetime')+60*24*365, function(){
                return Brandarticle::where('mid','1')->where('flags','like','%'.'a'.'%')->take(4)->orderBy('id','desc')->get();
            });
            Cache::forget('topbrandnavs');
            Cache::remember('topbrandnavs', config('app.cachetime')+60*24*365, function() {
                return Arctype::where('mid',1)->where('reid','<>',0)->orderBy('sortrank','asc')->get(['real_path','typename']);
            });
            Cache::forget('topbrandnavs');
            Cache::remember('flashlingshibrands', config('app.cachetime')+rand(60,60*24), function() {
                return Brandarticle::where('mid','1')->where('flags','like','%'.'h'.'%')->take(7)->orderBy('id','desc')->get();
            });

        }

    }
}
