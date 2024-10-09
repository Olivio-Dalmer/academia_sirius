<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']);
    // Outras rotas
});*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/tasks', [Api\TaskController::class, 'index']);
    Route::post('/tasks', [Api\TaskController::class, 'store']);
    Route::put('/tasks/{task}', [Api\TaskController::class, 'update']);
    Route::delete('/tasks/{task}', [Api\TaskController::class, 'destroy']);
 });

 Route::apiResource('tasks', Api\TaskController::class)->middleware('auth:sanctum');
