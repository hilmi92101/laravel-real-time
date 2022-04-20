<?php

namespace App\Http\Controllers\Api\Queues;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Jobs\CustomerJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new CustomerJob());
        //dispatch(new CustomerJob())->delay(now()->addMinutes(1));

        return json_encode([

            'message' => 'Email has been delivered',

        ]);
    }
}
