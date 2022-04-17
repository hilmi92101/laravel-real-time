<?php

namespace App\Http\Controllers\Api\RedisTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function triggerNotification(Request $request)
    {

        $visitor_id = $request->visitorId;


        if(!Cache::has($visitor_id)){
            Cache::forget('visitors');
        }
        $visitors = Cache::get('visitors');

        


        $seconds = 20;
        //Cache::add('counter', 1, $seconds);



        $counter = 0;
        $has_counter = false;
        if (Cache::has('counter')) {
            $has_counter = true;
            $counter = Cache::get('counter');
        }

        return json_encode([
            'counter' => $counter,
            'has_counter' => $has_counter,
            'visitors' => $visitors,
            'visitorId' => $request->visitorId,
        ]);
    }
}
