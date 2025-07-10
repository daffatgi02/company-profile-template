<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::post('/', [ContactController::class, 'store'])->name('store');
    Route::get('/success', [ContactController::class, 'success'])->name('success');
});