<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk dashboard (hanya bisa diakses jika sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
