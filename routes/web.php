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
Route::get('/dashboard', [NavbarController::class, 'home'])->name('dashboard');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginValidator'])->name('loginValidator');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//todo
Route::post('/add/todo', [DashboardController::class, 'insertTodoDash'])->name('add/todo');
//in-progress
Route::post('/add/in-progress', [DashboardController::class, 'insertInProgressDash'])->name('add/in-progress');
//issue
Route::post('/add/issues-list', [DashboardController::class, 'insertIssueDash'])->name('add/issues-list');
//done
Route::post('/add/done', [DashboardController::class, 'insertDoneDash'])->name('add/done');

//user
//get
Route::get('/user/list', [UserController::class, 'index'])->name('user/list');
//user-add
Route::get('/user/add', [UserController::class, 'addUser'])->name('user/add');
Route::post('user/insert', [UserController::class, 'insertUser'])->name('user/insert');
//user-edit
Route::get('/user/edit', [UserController::class, 'edit'])->name('/user/edit');
