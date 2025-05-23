<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->prefix('/authentication')->group(function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);
});


Route::middleware('auth')->prefix('/authentication')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
});


