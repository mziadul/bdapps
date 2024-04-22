<?php

use App\Http\Controllers\User\HomeController;

Route::namespace ('App\Http\Controllers\User')->name('user.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
    Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
    Route::post('/registration', [HomeController::class, 'storeRegistration'])->name('registration.store');
});
