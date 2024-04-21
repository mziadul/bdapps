<?php

use App\Http\Controllers\Admin\HomeController;

Route::namespace ('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
   
});
