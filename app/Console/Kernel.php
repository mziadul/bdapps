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
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        // ::: 1st send mail :::
        if (!\File::exists(storage_path('logs/sendMailToDev/'))) {
            \File::makeDirectory(storage_path('logs/sendMailToDev/'), 0777, true);
        }
        $schedule->command('sendMailToDev:process')
            ->everyMinute()
            ->runInBackground()
            ->appendOutputTo(storage_path('logs/sendMailToDev/' . date('Ymd') . '.log'));
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
