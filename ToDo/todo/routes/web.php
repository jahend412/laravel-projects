<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])-name('tasks.create');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])-name('tasks.store');
Route::get('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'show'])-name('tasks.show');
Route::get('/tasks/{task}/edit', [App\Http\Controllers\TaskController::class, 'edit'])-name('tasks.edit');
Route::put('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])-name('tasks.update');
Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])-name('tasks.destroy');

