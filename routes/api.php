<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('fichas/search', [\App\Http\Controllers\ApiFichaController::class, 'search']);

Route::get('campos', [\App\Http\Controllers\ApiCampoController::class, 'index']);

Route::get('faixas', [\App\Http\Controllers\ApiFaixaController::class, 'index']);

// Route::resource('fichas', \App\Http\Controllers\ApiFichaController::class);

/* Route::resource('fichas', \App\Http\Controllers\ApiFichaController::class)
    ->only(['show', 'store', 'update', 'destroy'])
    ->middleware('auth:sanctum');

    

Route::prefix('auth')->group(function() {
    Route::post('login', 
        [\App\Http\Controllers\Auth\Api\LoginController::class, 'login']);

    Route::post('logout', 
        [\App\Http\Controllers\Auth\Api\LoginController::class, 'logout'])
        ->middleware('auth:sanctum');

        Route::post('register', 
        [\App\Http\Controllers\Auth\Api\RegisterController::class, 'register']);
    
}); 
*/

