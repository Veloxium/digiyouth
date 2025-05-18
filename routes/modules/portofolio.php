<?php
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

Route::prefix('/portofolio')->group(function () {
    Route::get('/', [PortofolioController::class, 'index']);
    Route::get('/upload-project', [PortofolioController::class, 'upload']);
    Route::get('/tracking', [PortofolioController::class, 'tracking']);
    Route::get('/{id}/statistic', [PortofolioController::class, 'statistic']);
});
