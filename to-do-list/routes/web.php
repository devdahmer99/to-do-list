<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::get('/task', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/task/new', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('task.edit_action');
Route::get('/task/delete', [TaskController::class, 'delete'])->name('tasks.delete');

