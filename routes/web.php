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

Route::get('/', function () {
    return view('index');
});

Route::get('search', [\App\Http\Controllers\SearchController::class, 'index']);

Route::get('add/{id}' , [\App\Http\Controllers\SearchController::class, 'add']);

Route::get('remove/{id}' , [\App\Http\Controllers\SearchController::class, 'remove']);

Route::get('buy', [\App\Http\Controllers\BuyController::class, 'buy']);
Route::get('clear', [\App\Http\Controllers\BuyController::class, 'clear']);