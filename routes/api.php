<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Realtime\RegisterController as RTRegisterController;
use App\Http\Controllers\Api\RedisTest\TestController as RedisTestTestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/rt/register', [RTRegisterController::class, 'register']);
Route::post('/redis-test/trigger-notification', [RedisTestTestController::class, 'triggerNotification']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
