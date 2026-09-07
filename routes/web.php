<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User routes
|--------------------------------------------------------------------------
*/
Route::name('user.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
