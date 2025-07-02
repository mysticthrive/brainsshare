<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::middleware('guest')->group(function () {
  Route::get('/register', [RegisterUserController::class, 'create']);
  Route::post('/register', [RegisterUserController::class, 'store']);
  Route::get('/login', [SessionController::class, 'create'])->name('login');
  Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy']);

Route::middleware('auth')->prefix('/admin')->group(function () {
  Route::get('/dashboard', [AdminController::class, 'dashboard']);
  Route::get('/posts/create', [PostController::class, 'create']);
  Route::post('/posts', [PostController::class, 'store']);
  Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
  Route::patch('/posts/{post}', [PostController::class, 'update']);
  Route::delete('/posts/{post}', [PostController::class, 'destroy']);
});