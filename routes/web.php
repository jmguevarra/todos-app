<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController; //must be in upper

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
    return view('welcome');
});

Route::get('todos', [TodosController::class, 'index']);

Route::get('todos/{todo}', [TodosController::class, 'show']);

Route::get('new-todos', [TodosController::class, 'create']);
Route::post('save-todos', [TodosController::class, 'saveTodo']);

Route::get('todos/{todo}/edit', [TodosController::class, 'editTodo']);
Route::post('todos/{todo}/update-todos', [TodosController::class, 'updateTodo']);

Route::get('todos/{todo}/delete', [TodosController::class, 'deleteTodo']);

Route::get('todos/{todo}/complete', [TodosController::class, 'completeTodo']);