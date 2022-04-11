<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksUserController;
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

//root
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginValidator'])->name('loginValidator');
//logout
//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

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
Route::get('/user-list', [UserController::class, 'index'])->name('user/list')->middleware('Dashboard');
//user-add
Route::get('/user-add', [UserController::class, 'addUsers'])->name('user/add')->middleware('Dashboard');
Route::post('/user/insert', [UserController::class, 'insertUser'])->name('user/insert')->middleware('Dashboard');
//user-edit
Route::get('/user-edit/{id}', [UserController::class, 'userEdit'])->name('user/edit')->middleware('Dashboard');
Route::post('/user-update', [UserController::class, 'userUpdate'])->name('user/update');

//task-assign-by-user
//get
Route::get('/todo-edit/{id}', [TasksUserController::class, 'getTasksByUser'])->name('todo-edit');

//task
//get
// Route::post('/task', [UserController::class, 'userUpdate'])->name('user/update');
