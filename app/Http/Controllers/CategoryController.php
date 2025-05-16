<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('guest.category.index');
    }

    public function detail(string $id): View
    {
        return view('guest.category.detail');
    }
}
