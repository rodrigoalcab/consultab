<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});

Route::resource('campos', \App\Http\Controllers\CampoController::class)
->parameters([
    'campos' => 'id'
])->middleware('auth');

Route::resource('faixas', \App\Http\Controllers\FaixaController::class)
->parameters([
    'faixas' => 'id'
])->middleware('auth');

Route::resource('fichas', \App\Http\Controllers\FichaController::class)
->parameters([
    'fichas' => 'id'
])->middleware('auth');
