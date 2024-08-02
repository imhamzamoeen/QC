<?php

namespace App\Jobs;

use App\Models\UserAttributes;
use App\Notifications\NewModuleAddedNotification;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SendNewServiceAddedNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $serviceName;
    protected $description;
    protected $user;

    public function __construct($serviceName, $description, $user)
    {
        $this->serviceName = $serviceName;
        $this->description = $description;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data['service-name'] = $this->serviceName;
        $data['description'] = $this->description;
        $db['details'] = 'You just added ' . $this->serviceName . ' to the system !';
        Notification::send($this->user, new NewModuleAddedNotification($data, $db));
    }
}
