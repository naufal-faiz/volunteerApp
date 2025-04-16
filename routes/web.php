<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VolunteerController;

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/home', 'index');
});
Route::get('/opportunities', [VolunteerController::class, 'index'])->name('volunteer');
Route::get('/opportunities/{volunteer}', [VolunteerController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index'])->name('category');
Route::get('/how-it-works', function() {
    return view('home.activities.howItWorks', [
        'title' => 'How It Works'
    ]);
});
Route::get('/about', function() {
    return view('home.activities.about', [
        'title' => 'About'
    ]);
});

Route::get('login', [AuthController::class, 'login'])->name('login');