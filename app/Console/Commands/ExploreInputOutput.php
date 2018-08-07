<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ExploreInputOutput extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tell_me {name?} {--secret}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Input output functions ';

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
        $is_secret = $this->option('secret');
        $entered_a_name = $this->argument('name');


        if($is_secret&&$entered_a_name){
            $secret_key = $this->ask_for_key_and_tell_secret($entered_a_name);
            
            
        }

        if($is_secret&&(!$entered_a_name)){
            $name = $this->anticipate('What is your name?', ['Okello', 'Joel','okello','joel']);
            $this->ask_for_key_and_tell_secret($name);

        }

        if((!$is_secret)&&(!$entered_a_name)){ 
            
            $name = $this->ask("Whats your name");
            $wants_a_secret = $this->choice('You want a secret?', ['Yes', 'No']);
            if($wants_a_secret=='Yes'){
              $this->ask_for_key_and_tell_secret($name);  
            }
            if($wants_a_secret=='No'){
                $this->info("Good bye ".$name);
                $this->line("You can opt for secret using --secret");
            }
        }
          
             
            
        

        if((!$is_secret)&&($entered_a_name)){ 
            $wants_a_secret = $this->confirm('Hi '.$entered_a_name.' You want a secret?');
            $this->ask_for_key_and_tell_secret($entered_a_name);  
           
            
        }
            
            
    }

    

    

    public function ask_for_key_and_tell_secret($name){
        
        $secret_key = $this->secret("Hey ".strtoUpper($name)." Enter the key to display");
        
        $tell_secret_key = $this->info("Cheers ".strtoUpper($name)." you entered '".$secret_key."' as the secret");

    }

    
}
