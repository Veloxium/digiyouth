<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ApprovalController extends Controller
{

    public function index(): View
    {
        return view('admin.approval.index');
    }
}
