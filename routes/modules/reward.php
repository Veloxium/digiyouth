<?php

use App\Http\Controllers\RewardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/reward')->group(function () {
    Route::get('/', [RewardController::class, 'index']);
});


// blom pakek middleware buat sliching dulu
Route::prefix('/admin/reward')->group(function () {
    Route::get('/', [RewardController::class, 'indexAdmin']);
});
