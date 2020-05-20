<?php

namespace App\Listeners;

use App\Events\CategoryCacheDeleteEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryCacheDeleteEventListener
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
     * @param  CategoryCacheDeleteEvent  $event
     * @return void
     */
    public function handle(CategoryCacheDeleteEvent $event)
    {
        //
    }
}
