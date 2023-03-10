<?php

namespace App\Listeners;

use App\Events\ViewMovie;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;

class CountViewMovie
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Handle the event.
     *
     * @param  \App\Events\ViewMovie  $event
     * @return void
     */
    public function handle(ViewMovie $event)
    {
        $movie = $event->movie;
        $movie->increment('count_view');
    }

}
