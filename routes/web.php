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


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [\App\Http\Controllers\CardController::class, 'index'])->name('cards.index');
Route::get('/cadastrar', [\App\Http\Controllers\CardController::class, 'create'])->name('cards.create');
Route::post('/salvar', [\App\Http\Controllers\Admin\CardController::class, 'store'])->name('cards.store');
