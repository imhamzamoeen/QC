<?php

namespace App\Jobs;

use App\Models\CompanyPolicy;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActivityLogJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $details;

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
    activity()
   ->performedOn(CompanyPolicy::find($this->details['PerformedOn']))   //model fetched konsa like comapnies::first()   
    ->causedBy(User::find($this->details['Causer']))        
   ->withProperties($this->details)
   ->log('Quote Calculated');
    }
}
