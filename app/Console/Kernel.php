<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected $commands = [
        Commands\DrcCron::class,
        Commands\Src3Cron::class,
        Commands\Src5Cron::class,
        Commands\Src8Cron::class,
        Commands\Src10Cron::class,
        Commands\Drc3Cron::class,
        Commands\Drc5Cron::class,
        Commands\Drc8Cron::class,
        Commands\Drc10Cron::class,
    ];
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('Drc:cron')
        // ->everyMinute();
        $schedule->command('Src3:cron')
        ->everyMinute();
        $schedule->command('Src5:cron')
        ->everyMinute();
        $schedule->command('Src8:cron')
        ->everyMinute();
        $schedule->command('Src10:cron')
        ->everyMinute();
        $schedule->command('Drc3:cron')
        ->everyMinute();
        $schedule->command('Drc5:cron')
        ->everyMinute();
        $schedule->command('Drc8:cron')
        ->everyMinute();
        $schedule->command('Drc10:cron')
        ->everyMinute();
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
