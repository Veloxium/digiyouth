<?php
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('/portofolio')->group(function () {
    Route::get('/', [PortofolioController::class, 'index']);
    Route::get('/upload-project', [PortofolioController::class, 'upload']);
    Route::get('/tracking', [PortofolioController::class, 'tracking']);
    Route::get('/tracking/{id}/detail', [PortofolioController::class, 'detail']);
    Route::get('/{id}/statistic', [PortofolioController::class, 'statistic']);


    Route::post('/store', [PortofolioController::class, 'store']);
});
