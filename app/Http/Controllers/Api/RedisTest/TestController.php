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
        $time_now = time();
        $time_expired = $time_now + 10;
        

        // if(!Cache::has('visitors')) {
        //     Cache::add('visitors', []);
        // }

        //$visitors = Cache::get('visitors');
        
        // if(count($visitors) > 0){
        //     for ($x = 0; $x < count($visitors); $x++) {
        //         if($visitors[$x]["id"] == $visitor_id) {
        //             $is_exist = true;
        //             $visitors[$x]["expired_on"] = $time_expired;
        //         } else {
        //             $diff = $time_now - $visitors[$x]["expired_on"];
        //             if($diff > 10){
        //                 $diffs[] = $time_now . "-" . $visitors[$x]["expired_on"] . " = " . ($time_now - $visitors[$x]["expired_on"]) . " (" . $visitors[$x]["id"] . ")";
        //                 $indexesDeleted[] = $x;
        //                 unset($visitors[$x]);
        //             }
                    
        //         }
        //     }

        //     Sort($visitors); 

        //     if(!$is_exist){
        //         array_push($visitors, [
        //             "id" => $visitor_id,
        //             "time_added" => $time_now,
        //             "expired_on" => $time_expired,
        //         ]);
        //     }
            
        //     Cache::put('visitors', $visitors);
        // } else {
        //     array_push($visitors, [
        //         "id" => $visitor_id,
        //         "time_added" => $time_now,
        //         "expired_on" => $time_expired,
        //     ]);

        //     Cache::put('visitors', $visitors);
        // }
        


        // Cache::put($visitor_id, $visitor_id, $seconds = 10);
        // $visitors = Cache::get('visitors');


        Cache::flush();

        

        return json_encode([
            //'visitors' => $visitors,
            //'total_visitors' => count($visitors),
            
            'visitorId' => $request->visitorId,
            'time_now_2' => now(),
            'time_now' => $time_now,
            'time_expired' => $time_expired,
        ]);
    }
}
