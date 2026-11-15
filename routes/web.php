<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class);
Route::get('/guest', [HomeController::class, 'guest'])->name('guest');
Route::get('/signup', [SignUpController::class, 'create'])->name('signup');
Route::get('/login', [LogInController::class, 'create'])->name('login');