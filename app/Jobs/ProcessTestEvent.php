<?php

namespace App\Jobs;

use App\Events\TestEvent;
use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Throwable;

class ProcessTestEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $eventType;
    public function __construct()
    {
        //
      //  $this->eventType = $company;


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
       // event(new TestEvent($this->company));
       logger('Empieza el batch');
       sleep(30);
       logger('Termina el batch');

    }

    public function failed(Throwable $exception)
    {
        // Send user notification of failure, etc...
        logger('Job fallido');
    }
}
