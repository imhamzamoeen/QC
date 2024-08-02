<?php

namespace App\Jobs;

use App\Notifications\SignUpNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SignUpMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $agency;
    public function __construct($agency)
    {
        $this->agency = $agency;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user['heading-email'] = 'Thank you ' . $this->agency->user->email;
        $user['description'] = 'for registering ' . $this->agency->user->email . ' as an agency at ' . config('app.name', env('APP_NAME')) .
            '.It has now access to the system ! You can now add policies to the system which are going to be available to the relevant authorities';
        $db_user['details'] = 'You just registered as an agency at ' . config('app.name', env('APP_NAME')) . ' with email : ' . $this->agency->user->email . ' as an agency !';
        if (!$this->agency->owner)
            Notification::send($this->agency->user, new SignUpNotification($user, $db_user));
        else {
            $owner['heading-email'] = 'Thank you for registering the email : ' . $this->agency->user->email;
            $owner['description'] = 'You are now the owner of the agency. This agency has now access to the system and can now add policies';
            $db_owner['details'] = 'You added a new agency at ' . config('app.name', env('APP_NAME')) . ' with email : ' . $this->agency->user->email . '. You have the ownership of it !';
            Notification::send($this->agency->user, new SignUpNotification($user, $db_user));
            Notification::send($this->agency->owner, new SignUpNotification($owner, $db_owner));
        }
    }
}
