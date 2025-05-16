<?php

use App\Http\Controllers\ApprovalController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin/approval')->group(function () {
    Route::get('/', [ApprovalController::class, 'index']);
});
