<?php

namespace App\Console\Commands;

use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ForgetPasswordDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'forget:password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to delete the forget password links after one day ';

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
         PasswordReset::whereDate('created_at', Carbon::today())->delete();
        return 0;
    }
}
