<?php

namespace App\Jobs;

use App\Mail\TestMail;
use App\Notifications\NewModuleAddedNotification;
use App\Notifications\testMailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class TestEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $details;
  
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Notification::send(auth()->user(), new testMailNotification($this->details));
        // Mail::to('imfaisiii5@gmail.com')->send(new TestMail($this->details));
        // $data['service-name'] = 'test name';
        // $data['description'] = 'test_description';
        // $db['details'] = 'You just added a new service  to the system !';
        // Notification::send($this->user, new NewModuleAddedNotification($data, $db));
    }
}
