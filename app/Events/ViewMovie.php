<?php
namespace App\Events;

use App\Models\Movie;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Session\Store;

class ViewMovie
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public  $movie;

    public function __construct(Movie $movie)
    {
        $this->movie=$movie;
    }
}
