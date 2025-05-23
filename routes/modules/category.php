<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('/category')->group(function () {
    Route::get('/{cat}', [CategoryController::class, 'index']);
    Route::get('/{slug}/{id}/detail', [CategoryController::class, 'detail']);
});

Route::middleware('auth')->prefix('/project')->group(function () {
    Route::post('/{project}/like', [CategoryController::class, 'like']);
    Route::post('/{projectId}/comment', [CategoryController::class, 'comment']);
    Route::post('/comment/{comment}/like', [CategoryController::class, 'commentLike']);
});
