<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProducrtsController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AboutUSController; // Import the UserDashboardController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/products', [ProducrtsController::class, 'index']);
Route::get('/subscribe', [SubscribeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [AboutUSController::class, 'index'])->name('home');

// Define the user dashboard route
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

// Define the user dashboard route
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

Route::get('/about', function () {
    return view('aboutUs');
})->name('about');

// web.php
Auth::routes();


