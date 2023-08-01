<?php

use App\Http\Controllers\Tasks;
use Illuminate\Support\Facades\Route;

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

// Tasks

Route::get('/',[Tasks::class,'index'])->name('tasks.index');
Route::get('/tasks/create', [Tasks::class, 'create'])->name('tasks.create');
Route::post('/tasks/store',[Tasks::class,'store'])->name('tasks.store');
Route::get('/tasks/{task}',[Tasks::class,'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [Tasks::class,'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [Tasks::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [Tasks::class, 'destroy'])->name('tasks.delete');
Route::get('/tasks/{task}/subtasks', [Tasks::class, 'getSubtasks']);



// sub tasks
