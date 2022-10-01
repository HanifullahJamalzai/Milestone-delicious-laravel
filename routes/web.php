<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\WCUController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use App\Models\Food;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/event', [LandingController::class, 'event'])->name('event');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/menu', [LandingController::class, 'menu'])->name('menu');


Route::middleware(['guest'])->group(function () {
    Route::post('/register', [RegisterController::class, 'store'])->name('register.user');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');    
});



Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    
    Route::get('/wcu', [WCUController::class, 'index'])->name('admin.wcu');
    Route::get('/wcu/create', [WCUController::class, 'create'])->name('admin.wcu.create');
    Route::post('/wcu/store', [WCUController::class, 'store'])->name('admin.wcu.store');
    Route::delete('/wcu/delete/{id}', [WCUController::class, 'destroy'])->name('admin.wcu.delete');
    Route::get('/wcu/{id}/edit', [WCUController::class, 'edit'])->name('admin.wcu.edit');
    Route::put('/wcu/{id}/update', [WCUController::class, 'update'])->name('admin.wcu.update');
    
    // Resource Route
    Route::resource('category', CategoryController::class);

    Route::get('/food/{id}/edit/{slug}', [FoodController::class, 'edit'])->name('food.edit');
    Route::get('food/search', [FoodController::class, 'search'])->name('food.search');
    Route::get('food/trash', [FoodController::class, 'trash'])->name('food.trash');
    Route::delete('food/permanent-delete/{food}', [FoodController::class, 'PermanentDelete'])->name('food.pdelete');
    
    Route::resource('food', FoodController::class);
   
    Route::get('food/restore/{food}', [FoodController::class, 'RestoreItem'])->name('food.restoreItem');
    
});


