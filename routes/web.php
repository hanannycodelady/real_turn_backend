<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::post('/register', [RegisterController::class, 'register']);


Route::resource('players', App\Http\Controllers\PlayersController::class);


Route::resource('tournaments', App\Http\Controllers\TournamentController::class);


Route::resource('matches', App\Http\Controllers\MatchController::class);


Route::resource('overviews', App\Http\Controllers\OverviewController::class);


Route::resource('bio', App\Http\Controllers\BioController::class);


Route::resource('stats', App\Http\Controllers\statsController::class);


Route::resource('ranks', App\Http\Controllers\RankController::class);
