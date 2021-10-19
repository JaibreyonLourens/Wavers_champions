<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderBoardController;
use App\Http\Controllers\BattlesController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [
    PagesController::class,
    'home'
])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('leaderboard', LeaderBoardController::class);
Route::resource('battles', BattlesController::class);
Route::get('/list', [BattlesController::class, 'list']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
