<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\VehiclesController;
use Api\VehiclesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});
//Route::get('vehicles', [VehiclesController::class, 'index']);
//Route::post('vehicles', 'VehiclesController@store');
//Route::apiResource('vehicles', 'VehiclesController')->withoutMiddleware(['auth']);

Route::group(['middleware' => ['cors']], function () {
     Route::apiResource('vehicles', VehiclesController::class);
});