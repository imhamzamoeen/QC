<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detials)
    {
        //
        $this->details=$detials;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('test')->with(['details'=>$this->details]);
    }
}
