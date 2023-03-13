<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PodcastProcessed implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    private string $message;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message=$message;
    }
    
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public.playground.1');
    }

    public function broadcastAs()
    {
        return 'podcast';
        
    }
    public function broadcastWith()
    {
        return["message"=>$this->message] ;
        
    }
}
