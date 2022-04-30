<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/todo/index', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/edit/{id}',  [TodoController::class, 'edit'])->name('todo.edit')->where('id', '[0-9]+');
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update')->where('id', '[0-9]+');
Route::get('/todo/destroy/{id}/', [TodoController::class, 'destroy'])->name('todo.destroy')->where('id', '[0-9]+');
// Route::get('/todo/index', 'TodoController@index')->name('todo.index');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
