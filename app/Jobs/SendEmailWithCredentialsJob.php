<?php

namespace App\Jobs;

use App\Notifications\EmailWithCredentialsNotification;
use App\Notifications\SignUpNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SendEmailWithCredentialsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $receiver;
    protected $password;
    protected $type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($receiver, $password, $type)
    {
        $this->receiver = $receiver;
        $this->password = $password;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // First Send the email with credentials to the user id
        $user['heading-email'] = 'Thank you ' . $this->receiver->user->email . ' is now registered.';
        $user['password'] = $this->password;
        $user['description'] = 'Note do not share this password with any one , and as soon you login it is recommended to change your password !';
        $this->receiver->owner == null ? $email = 'yourself' : $email = $this->receiver->owner->name;
        $db_user['details'] = 'You were just registered as an ' . $this->type . ' at ' . config('app.name', env('APP_NAME')) . ' with email : ' . $this->receiver->user->email . ' as an ' . $this->type . ' by : ' . $email . ' !';
        Notification::send($this->receiver->user, new EmailWithCredentialsNotification($user, $db_user));

        // Secondly send email to the person that has added that!
        $owner['heading-email'] = 'Thank you for registering ' . $this->receiver->user->email;
        $owner['description'] = 'Note : The ' . $this->type . ' has now access to the system address and credentials were sent on the registered email address !';
        $db_owner['details'] = 'You just registered an ' . $this->type . ' at ' . config('app.name', env('APP_NAME')) . ' having email : ' . $this->receiver->user->email . ' !';
        if (!is_null($this->receiver->owner))
            Notification::send($this->receiver->owner, new SignUpNotification($owner, $db_owner));
    }
}
