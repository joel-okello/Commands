<?php

namespace App\Console;
use Artisan;
use App\FortuneHelper;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
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

        Artisan::command('fortune {--l} {--s} {--o} {--ls} {--sl}', function (){
            if((($this->option('l'))&&($this->option('s')))||($this->option('ls'))||($this->option('sl'))){
                $this->error("Invalid option --l and --s\n");
                return;
            }
            if($this->option('l')){
                $this->info(FortuneHelper::get_long_message()."\n");
            }
             if($this->option('s')){
                $this->info(FortuneHelper::get_short_message()." \n");
            }
            if($this->option('o')) {
                $this->info(FortuneHelper::get_o_message()." \n");
            }
            if(!(($this->option('l'))||($this->option('s')||($this->option('o'))))){
                $this->info(FortuneHelper::get_short_message()."\n");
                }
        
        })->describe('Artisan fortune command');



        Artisan::command('progressbar ', function (){
        $number_of_bar = 10;
        $rendered_bars = 0;
        $time_for_each_bar = 1; //seconds

    
        $bar = $this->output->createProgressBar($number_of_bar);
        
        while ($rendered_bars<$number_of_bar) {
             sleep($time_for_each_bar);
             $rendered_bars++;
            $bar->advance();
        }

        $bar->finish();
        
        })->describe('Displaying a progress bar');
    }
}
