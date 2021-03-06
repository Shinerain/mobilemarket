<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Busi\VisitTodoCalendar;

class VisitTodoStatusChangedEvent
{
    use InteractsWithSockets, SerializesModels;

	public $model;

	/**
	 * Create a new event instance.
	 *
	 * @param VisitTodoCalendar $model
	 */
	public function __construct(VisitTodoCalendar $model)
	{
		//
		$this->model = $model;
	}

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
