<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index']);



    Route::put('/update', [ProfileController::class, 'update']);
});
