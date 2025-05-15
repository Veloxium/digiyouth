<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/category', function () {
    return view('guest.category');
});

Route::get('/portofolio', function () {
    return view('guest.portofolio');
});