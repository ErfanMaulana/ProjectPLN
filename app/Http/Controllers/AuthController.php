<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('LR.login'); // Pastikan file view ada di resources/views/LR/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Redirect ke dashboard jika login berhasil
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login'); // Redirect ke halaman login setelah logout
    }
}
