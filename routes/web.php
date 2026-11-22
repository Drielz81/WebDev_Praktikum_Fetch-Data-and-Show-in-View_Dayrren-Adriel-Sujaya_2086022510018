<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\AboutController;


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/blog', [blogController::class, 'index'])->name('blog');
Route::get('/about', [AboutController::class, 'index'])->name('about');