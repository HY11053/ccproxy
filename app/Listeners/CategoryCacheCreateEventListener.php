<?php

namespace App\Listeners;

use App\AdminModel\Arctype;
use App\Events\CategoryCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class CategoryCacheCreateEventListener
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
     * @param  CategoryCacheCreateEvent  $event
     * @return void
     */
    public function handle(CategoryCacheCreateEvent $event)
    {
        $id=$event->arctype->id;
        if (Arctype::find($id))
        {
            Cache::forget('thistypeinfos_'.$id);
            Cache::remember('thistypeinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
                return Arctype::where('id',$id)->first();
            });
            Cache::forget('topbrandnavs');
            Cache::remember('topbrandnavs', config('app.cachetime')+60*24*365, function() {
                return Arctype::where('mid',1)->where('reid','<>',0)->orderBy('sortrank','asc')->get(['real_path','typename']);
            });

        }
    }
}
