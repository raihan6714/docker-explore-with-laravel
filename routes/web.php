<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'dashboard']);
Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('users', [UserController::class, 'users']);
