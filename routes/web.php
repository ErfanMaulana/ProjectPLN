<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


// Route untuk proses login
Route::get('/LR/login', action: function () {
    return view('login');
})->name('login');

Route::get('/LR/register', action: function () {
    return view('register');
})->name('register');



// Route untuk dashboard (hanya bisa diakses jika sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route untuk logout

Route::get('/LR/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/LR/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
