<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RewardController extends Controller
{
    public function index(): View
    {
        // if (Auth::user()->role === 'admin') {
        //     return view('admin.reward.index');
        // }
        return view('guest.reward.index');
    }


    //note : sementara nanti pakek kondisi diatas kalok udah auth sama session
    public function indexAdmin(): View
    {
        return view('admin.reward.index');
    }
}
