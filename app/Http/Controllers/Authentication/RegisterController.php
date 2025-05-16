<?php

namespace App\Http\Controllers\Authentication;
use Illuminate\View\View;

class RegisterController
{
    public function index(): View
    {
        return view('authentication.login');
    }
}
