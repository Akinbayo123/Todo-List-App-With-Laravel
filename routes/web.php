<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
Route::get('/', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->middleware('guest')->name('user_signup');
Route::get('/signup', [UserController::class, 'create'])->middleware('guest')->name('signup');
Route::get('/todos', [TodoController::class, 'show'])->middleware('auth')->name('home');
Route::get('/todos/{id}', [TodoController::class, 'view'])->middleware('auth')->name('show');

Route::get('/new', [TodoController::class, 'new'])->middleware('auth')->name('new');
Route::get('/todo/{id}', [TodoController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('/user/{id}', [TodoController::class, 'update'])->middleware('auth')->name('update_todo');
Route::delete('/remove/{id}', [TodoController::class, 'destroy'])->middleware('auth')->name('remove');
Route::post('/new_todo', [TodoController::class, 'create'])->middleware('auth')->name('save_new');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/confirm', [UserController::class, 'confirm'])->name('confirm');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/forget', [UserController::class, 'forgotPassword'])->name('forget');

Route::get('reset-password/{token}', [UserController::class, 'show_pas'])
->name('password.reset');
Route::post('reset-password', [UserController::class, 'store_pas'])
->name('forget.store');


