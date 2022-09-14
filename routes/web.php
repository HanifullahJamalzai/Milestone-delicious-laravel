<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\WCUController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
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
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/wcu', [WCUController::class, 'index'])->name('admin.wcu');
Route::get('/wcu/create', [WCUController::class, 'create'])->name('admin.wcu.create');
Route::post('/wcu/store', [WCUController::class, 'store'])->name('admin.wcu.store');
Route::delete('/wcu/delete/{id}', [WCUController::class, 'destroy'])->name('admin.wcu.delete');
