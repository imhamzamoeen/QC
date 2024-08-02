<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Activitylog\Models\Activity;

class DeleteActivitty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logdel:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This commands Delete activity log records more than a month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Activity::whereDate('created_at', Carbon::now()->subDays(30))->delete();
        return 0;
    }
}
