<?php

namespace App\Handlers\Events;

use App\Events\NewTaskCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandlerNewTaskCreated
{
    protected $title;
    protected $body;

    /**
     * Create the event handler.
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
     * @param  NewTaskCreated  $event
     * @return void
     */
    public function handle(NewTaskCreated $event)
    {
        $this->title = $event->title;
        $this->body = $event->body;
        echo "<div class='alert alert-success' role='alert'>".$this->title." task has been added to your task list and details have been mailed to your email-id.</div>";
    }
}
