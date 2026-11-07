<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');
Route::resource('/products', ProductController::class);
Route::get('/', [HomeController::class, 'index']);
