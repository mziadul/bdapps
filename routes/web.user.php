<?php

use App\Http\Controllers\User\HomeController;

Route::namespace ('App\Http\Controllers\User')->name('user.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
   
});
