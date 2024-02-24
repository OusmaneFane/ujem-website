<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/apropos', [AppController::class, 'about'])->name('apropos');
Route::get('/blog', [AppController::class, 'blog'])->name('blog');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');
