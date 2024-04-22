<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->as('auth.')->middleware('guest')->group(function() {
    Route::prefix('login')->as('login.')->group(function() {
        Route::get('', [LoginController::class, 'create'])->name('index');
        Route::post('store', [LoginController::class, 'store'])->name('store');
    });

    Route::prefix('register')->as('register.')->group(function() {
        Route::get('', [RegisterController::class, 'register'])->name('index');
        Route::post('store', [RegisterController::class, 'store'])->name('store');
    });
});
