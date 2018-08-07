<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;

class ChangePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chngpass {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for updating user password';

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
    public function handle(Hash $hash)
    {
        
        $email = $this->argument('email');
        if(!$this->argument('email'))
        { 
            $email = $this->receive_email();   
        }
        $user_data = $this->verify_user($email);
        if($user_data){
           $password_is_correct = $this->check_if_password_is_ok($user_data); 
           if($password_is_correct){
                $password_entered = $this->receive_passwords_twice();
                if($password_entered){
                    $this->update($email,$password_entered);
                }
           }
           else{
            $this->error("Your entered a wrong password");
           }
           
        }
        else{
            $this->error("Your email doesn't exist");
        }
        
        //$this->receive_passwords_twice();

        //verify the user name
        //check if password is same as db pass
        //receive password entered twice and compare if they match
        //update the pass
    }


    public function verify_user($email)
    {
        
        $user_found = DB::table('users')
            ->where('email', '=', $email)
            ->get()->first();

        if($user_found)
        {
          return $user_found;  
        }
        else
        {
            return null;
        }


    }

    public function update($email,$password)
    {
        $user_info = User::where('email','=',$email);
        $user_info->update(['password' => Hash::make($password)]);
        $this->info("Password updated sucessfully");
    }

    public function check_if_password_is_ok($user_data)
    {
        $password = $this->ask("Enter the current password for ".$user_data->email);
        if (Hash::check($password, $user_data->password)) {
            // The passwords match...
            return true;
        }
        
        return false;
    }


    public function receive_passwords_twice()
    {
        $password1 = $this->secret("Enter the new password");
        $password2 = $this->secret("Confirm the password you entered");
        if($password1 == $password2)
        {
            return $password1;
        }
        else
        {
            $this->error("Mismatch in passwords entered");
            return null;
        }
    }
    
    public function receive_email()
    {
        ;
        $emails = DB::table('users')
                ->select('email')
                ->get()
                ->pluck('email')
                ->toArray();
        return $email_entered = $this->anticipate("Please provide the email to update password",$emails);
    }
}
