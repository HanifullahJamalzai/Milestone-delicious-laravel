<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/menu', [LandingController::class, 'menu'])->name('menu');





Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register.user');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
