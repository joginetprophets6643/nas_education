<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\Nrc5DataImport;
use Maatwebsite\Excel\Facades\Excel;

class NRC5Cron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NRC5:cron';

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
        Excel::import(new Nrc5DataImport, public_path('grade5nationaldata.csv'));
        \Log::info("NRC5 Cron run Succesfully....");
    }
}
