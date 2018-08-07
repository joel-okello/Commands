<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\FortuneHelper;


class Talk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'talk';

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
    public function handle(FortuneHelper $drip_emailer_class)
    {
        $this->drip_emailer = $drip_emailer_class;
        $this->info($this->drip_emailer->get_short_message());
    }
}
