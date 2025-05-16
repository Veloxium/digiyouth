<?php

use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/statistic', [StatisticController::class, 'index']);
});
