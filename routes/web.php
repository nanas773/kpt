<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('login.github');

Route::get('/callback', [HomeController::class, 'callback']);

Route::get('/logout', [HomeController::class, 'logout']);

Route::resource('projects', ProjectController::class, ['only' => ['index', 'show']]);
Route::get('/teams', [TeamController::class, 'index']);
Route::resource('user', UserController::class, ['only' => ['info', 'edit']]);
