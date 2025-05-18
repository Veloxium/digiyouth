<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortofolioController extends Controller
{

    public function index(): View
    {
        return view('guest.portofolio.index');
    }

    public function upload(): View
    {
        return view('guest.portofolio.upload');
    }
    public function tracking(): View
    {
        return view('guest.portofolio.tracking');
    }
}
