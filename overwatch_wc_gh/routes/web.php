<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MatchController;

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

Route::view('/', 'home');
Route::view('/news', 'news');
Route::view('/schedule', 'schedule');

//teams' routes
Route::resource('/teams', TeamController::class);
Route::delete('/teams', [TeamController::class, 'destroyAll']);
Route::post('/teams/reset', [TeamController::class, 'resetWl']);

//players' routes
Route::resource('/players', PlayerController::class);
Route::post('/players/showAgeLessThan', [PlayerController::class, 'showAgeLessThan']);

//coaches' routes
Route::resource('/coaches', CoachController::class);
Route::delete('/coaches', [CoachController::class, 'destroyAll']);

//matches' routes
Route::resource('/matches', MatchController::class);