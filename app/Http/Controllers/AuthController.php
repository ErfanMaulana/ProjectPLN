<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
<<<<<<< HEAD
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('LR.login'); // Pastikan file view ada di resources/views/LR/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
=======
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

<<<<<<< HEAD
        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Redirect ke dashboard jika login berhasil
        }

        // Jika login gagal
=======
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

<<<<<<< HEAD
    // Proses logout
=======
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
<<<<<<< HEAD
        return redirect('/login'); // Redirect ke halaman login setelah logout
=======
        return redirect('/login');
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
    }
}
