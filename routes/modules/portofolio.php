<?php
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

Route::prefix('/portofolio')->group(function () {
    Route::get('/', [PortofolioController::class, 'index']);
});
