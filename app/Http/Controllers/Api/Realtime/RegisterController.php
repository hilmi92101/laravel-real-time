<?php

namespace App\Http\Controllers\Api\Realtime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Events\LandingNotification;

class RegisterController extends Controller
{
    public function register(Request $request){

        $email = $request->email;
        $password = $request->password;

        $message = $email .  " just registered";
        event(new LandingNotification($message)); 

        return json_encode([
            'email' =>$email,
            'password' =>$password,
        ]);
    }
}
