<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing.index');
});
Route::get('/event', function () {
    return view('landing.event');
});
Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/contact', function () {
    return view('landing.contact');
});
Route::get('/menu', function () {
    return view('landing.menu');
});


Route::get('/admin', function(){
    return view('admin.index');
});
