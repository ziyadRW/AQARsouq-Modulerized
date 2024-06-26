<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\AuthController;

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

// Web routes for user authentication
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'auth'])->name('login.store');
Route::post('logout', [UserController::class, 'destroy'])->name('logout');
Route::get('signup', [UserController::class, 'create'])->name('user.create');
Route::post('signup', [UserController::class, 'store'])->name('user.store');