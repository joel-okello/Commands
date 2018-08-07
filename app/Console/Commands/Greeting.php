<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DripEmailer;

class Greeting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greeting:person {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a greeting command';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $dripe_mailer;
    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(DripEmailer $drip_emailer_class)
    {
        $this->drip_emailer = $drip_emailer_class;
        $this->info($this->drip_emailer->send($this->argument('name')));
    }
}
