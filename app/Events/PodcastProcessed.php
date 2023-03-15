<?php

namespace App\Events;

use App\Models\User;
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
    private User $user;    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $message, User $user)
    { 
        //$this->channel=$channel;
        $this->message=$message;
        $this->user = $user;
    }
    
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('presence.channel.1');
    }

    public function broadcastAs()
    {
        return 'podcast';
        
    }
    public function broadcastWith()
    {
        return["message"=>$this->message,
                'user'=> $this->user->only(['name','email'])
            ] ;

        
    }
}
