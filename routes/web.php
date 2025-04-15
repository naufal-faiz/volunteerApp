<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/home', 'index');
});

Route::get('login', [AuthController::class, 'login'])->name('login');