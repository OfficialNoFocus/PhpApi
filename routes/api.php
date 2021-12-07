<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('/wines', WineController::class);
    Route::apiResource('/user', UserController::class,[
        'only' => ['index', 'show', 'update', 'destroy']
    ]);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::resource('/user', UserController::class, [
    'only' => ['store']
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('/wines', WineController::class, ['parameters' => ['wine' => 'id']]);