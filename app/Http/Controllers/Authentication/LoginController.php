<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController
{
    public function index(): View
    {
        return view('authentication.login');
    }


    public function login(Request $request): RedirectResponse
    {
        // dd($request->all());
        $credentials = $request->validate([
            'nis' => 'required|string',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return Auth::user()->role === 'admin'
                ? redirect()->intended('/admin/dashboard')
                : redirect()->intended('/');
        }

        return back()->withErrors([
            'nis' => 'nis tidak valid atau password salah.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
