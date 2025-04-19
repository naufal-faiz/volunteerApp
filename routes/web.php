<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VolunteerController;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/home', 'index');
});
Route::get('/about', [HomeController::class, 'about']);
Route::get('/opportunities', [VolunteerController::class, 'index'])->name('volunteer');
Route::get('/opportunities/{volunteer}', [HomeController::class, 'volunteer']);
Route::get('/categories', [CategoryController::class, 'index'])->name('category');
Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);