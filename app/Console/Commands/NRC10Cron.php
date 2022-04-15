<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\Nrc10DataImport;
use Maatwebsite\Excel\Facades\Excel;

class NRC10Cron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NRC10:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Excel::import(new Nrc10DataImport, public_path('grade10nationaldata.csv'));
        \Log::info("NRC10 Cron run Succesfully....");
    }
}
