<?php

use App\Http\Controllers\landing\LandingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/menu', [LandingController::class, 'menu'])->name('menu');





Route::get('/admin', function(){
    return view('admin.index');
});
