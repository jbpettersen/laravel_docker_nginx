<?php

use Illuminate\Support\Facades\Route;
use Modules\Kalkyle\Http\Controllers\KalkyleController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('kalkyles', KalkyleController::class)->names('kalkyle');
});

Route::middleware(['web', 'auth'])->group(function() {
    Route::get('/kalkyle', function () {
        return view('kalkyle::index');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/kalkyle', [\Modules\Kalkyle\Http\Controllers\KalkyleController::class, 'index'])->name('kalkyle');
});
