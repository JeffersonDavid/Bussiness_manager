<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Mockery\Adapter\Phpunit\TestListener;
use App\Jobs\ProcessTestEvent;

class TestListenerNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        //
        logger('listener when event is detected');
        ProcessTestEvent::dispatch();

    }
}
