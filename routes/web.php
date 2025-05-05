<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::middleware('guest')->group(function () {
  Route::get('/register', [RegisterUserController::class, 'create']);
  Route::post('/register', [RegisterUserController::class, 'store']);
  Route::get('/login', [SessionController::class, 'create']);
  Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy']);