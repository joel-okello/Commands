<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\FortuneHelper;


class CallCommandController extends Controller
{
    public function call_command()
	{
	//$progressbar = Artisan::call("progressbar");
	//dd(FortuneHelper::get_short_message());
   $password = 'password';
   $email = 'okellojoelacaye@gmail.com';
	$user_info = User::where('email','=',$email);
        $user_info->update(['password' => Hash::make($password)]);
        dd("Your new password is".$password);
    $greeting = Artisan::call("greeting:person",['name' =>' Joel Okello']);
    
   


	}
}
