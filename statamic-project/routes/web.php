<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;

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

Route::get('login', [UserController::class, 'show_login'])->name('login');
Route::get('signup', [UserController::class, 'show_signup'])->name('signup');
Route::get('reset-pw', [UserController::class, 'show_reset_pw'])->name('reset_pw');
Route::get('events', [SiteController::class, 'events']);

