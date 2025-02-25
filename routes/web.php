<?php
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
=======
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

<<<<<<< HEAD
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk dashboard (hanya bisa diakses jika sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route untuk logout
=======
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
>>>>>>> dc5a14e2a6f3bbcb4a59c344fc7c4de07e2f981f
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
