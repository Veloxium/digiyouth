<?php

namespace App\Http\Controllers\Authentication;
use Illuminate\View\View;

class LoginController
{
    public function index(): View
    {
        return view('authentication.login');
    }
}
