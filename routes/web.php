<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
//navbar
Route::get('/home', [NavbarController::class, 'home'])->name('home');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginValidator'])->name('loginValidator');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//user
Route::get('/user', [UserController::class, 'user'])->name('user');
