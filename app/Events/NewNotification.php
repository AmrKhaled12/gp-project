<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $user_creator;
    // protected $data;
    // protected $type;
    // protected $time;
    // protected $read_at;

    public function __construct($arr)
    {
        $this->user_creator = $arr;
        // $this->data = $arr['data'];
        // $this->type = $arr['type'];
        // $this->time = $arr['time'];
        // $this->read_at = $arr['read_at'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return ['notification'];
    }

    public function broadcastAs()
    {
        return 'NewNotification';
    }
}
