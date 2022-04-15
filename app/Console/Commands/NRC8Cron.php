<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\Nrc8DataImport;
use Maatwebsite\Excel\Facades\Excel;

class NRC8Cron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NRC8:cron';

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
        Excel::import(new Nrc8DataImport, public_path('grade8nationaldata.csv'));
        \Log::info("NRC8 Cron run Succesfully....");
    }
}
