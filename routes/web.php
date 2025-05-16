<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/category', function () {
    return view('guest.category');
});

Route::get('/category/detail', function () {
    return view('guest.detail_category');
});