<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
