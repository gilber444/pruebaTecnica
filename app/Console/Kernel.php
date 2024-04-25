<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\CronlessSchedule\CronlessSchedule;
use App\Http\Controllers\ImageController;

class Kernel extends ConsoleKernel
{
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

    /*protected function schedule(CronlessSchedule $schedule)
    {
        $schedule->call(function () {
            app(ImageController::class)->eliminarImagenesViejas();
        })->every('30')->days();
    }*/
}
