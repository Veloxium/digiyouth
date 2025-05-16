<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/report')->group(function () {
    Route::get('/', [ReportController::class, 'index']);
});
