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
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth:sanctum');


Route::resource('players', App\Http\Controllers\PlayersController::class);


Route::resource('tournaments', App\Http\Controllers\TournamentController::class);


Route::resource('matches', App\Http\Controllers\MatchController::class);


Route::resource('overviews', App\Http\Controllers\OverviewController::class);


Route::resource('bio', App\Http\Controllers\BioController::class);


Route::resource('stats', App\Http\Controllers\statsController::class);


Route::resource('ranks', App\Http\Controllers\RankController::class);

Route::resource('coachOverviews', App\Http\Controllers\CoachOverviewController::class);

Route::resource('coachBios', App\Http\Controllers\CoachBioController::class);

Route::resource('videos', App\Http\Controllers\VideoController::class);

Route::resource('galleries', App\Http\Controllers\GalleryController::class);

Route::resource('schools', App\Http\Controllers\SchoolController::class);

Route::resource('communities', App\Http\Controllers\CommunityController::class);

Route::resource('scores', App\Http\Controllers\ScoreController::class);

Route::resource('tickets', App\Http\Controllers\TicketController::class);

Route::resource('calendars', App\Http\Controllers\CalendarController::class);
