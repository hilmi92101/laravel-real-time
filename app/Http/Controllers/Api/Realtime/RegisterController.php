<?php

namespace App\Http\Controllers\Api\Realtime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){

        $email = $request->email;
        $password = $request->password;

        return json_encode([
            'email' =>$email,
            'password' =>$password,
        ]);
    }
}
