<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;

Route::namespace ('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->group(function () {

    Route::group(['middleware' => 'CheckAdminLogout'], function () {

        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/login/validate', [LoginController::class, 'loginValidate'])->name('login.validate');

    });

    Route::group(['middleware' => 'CheckAdminLogin'], function () {
        
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/user', [UserController::class, 'list'])->name('user');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
        Route::post('/user/disable', [UserController::class, 'disable'])->name('user.disable');
        Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    });

   
});
