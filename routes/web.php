<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/scoreboards', [App\Http\Controllers\ScoreboardController::class, 'index'])->name('scoreboards');
Route::post('/admin/scoreboards', [App\Http\Controllers\ScoreboardController::class, 'store'])->name('scoreboards.store');
Route::get('/admin/scoreboards/destroy/{scoreboard}', [App\Http\Controllers\ScoreboardController::class, 'destroy'])->name('scoreboards.destroy');
Route::get('/scoreboards/{scoreboard}', [App\Http\Controllers\ScoreboardController::class, 'show'])->name('scoreboards.view');
