<?php

namespace App\Jobs;

use App\Mail\lead_mail_company;
use App\Mail\LeadMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NewLeadMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $details;

    public function __construct($details)
    {
        //
        $this->details=$details;
      
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Mail::to($this->details['user_email'])->send(new LeadMail($this->details));         //ek company ko aur ek user ko 
        Mail::to($this->details['email'])->send(new lead_mail_company($this->details));          
    }
}
