<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class daily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'data table is cleaned';

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
     * @return mixed
     */
    public function handle()
    {
       try{
           DB::table('waiting_for_appointments')->delete();
           DB::table('slot_occupies')->delete();
//           DB::table('test')->delete();
       }catch (\Exception $e){
           echo "Got a problem in scheduler";
       }
    }
}
