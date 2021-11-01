<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Api\VehiclesController;
//use App\Http\Controllers\Api\ContactsController;
use Api\ContactsController;
use Api\AuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//      return $request->user();
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
});

Route::group(['middleware' => ['cors']], function () {
     Route::apiResource('vehicles', VehiclesController::class);
});

Route::get('contacts', "Api\ContactsController@index");
Route::get('conversation/{id}', "Api\ContactsController@getMessagesFor");
Route::post('conversation/send', "Api\ContactsController@send");

Route::post('login', "Api\AuthController@login");
Route::post('logout', "Api\AuthController@logout")->middleware('auth:sanctum');
//Route::post('register', "AuthController@register");

Route::post('/broadcast',function (Request $request){
     $pusher = new PusherPusher(env('PUSHER_APP_KEY'),env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'));
     return $pusher->socket_auth($request->request->get('channel_name'),$request->request->get('socket_id'));
});