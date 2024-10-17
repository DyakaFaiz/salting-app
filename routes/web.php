<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-proses', [RegisterController::class, 'registerProses'])->name('register-proses');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'loginProses'])->name('login-proses');

Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');