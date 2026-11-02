<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');