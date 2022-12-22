<?php

namespace App\Listeners;

use App\Events\ViewEpisode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Session\Store;

class ViewCountEpisode
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct( )
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ViewEpisode  $event
     * @return void
     */
    public function handle( ViewEpisode $event)
    {
            $episode = $event->episode;
            $episode->increment('count_view');
    }
}



































//class ViewCountEpisode
//{
//    private $session;
//    /**
//     * Create the event listener.
//     *
//     * @return void
//     */
//    public function __construct(Store $session)
//    {
//        $this->session = $session;
//    }
//
//    /**
//     * Handle the event.
//     *
//     * @param  \App\Events\ViewEpisode  $event
//     * @return void
//     */
//    public function handle( ViewEpisode $event)
//    {
//        if (!$this->isEpisodeViewed($event->episode))
//        {
//            $episode = $event->episode;
//            $episode->increment('count_view');
//            $this->storeEpisode($episode);
//        }
//        $episode = $event->episode;
//        $episode->increment('count_view');
//    }
//    private function isEpisodeViewed($episode)
//    {
//        $viewed = $this->session->get( 'viewed_episode', []);
//
//        return array_key_exists($episode->id, $viewed);
//    }
//    private function storeEpisode($episode)
//    {
//        $this->session->put('viewed_episode.' . $episode->id, time());
//    }
//}
