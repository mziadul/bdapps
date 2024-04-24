<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AndroidDevListController;

Route::namespace ('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')->group(function () {

    Route::group(['middleware' => 'CheckAdminLogout'], function () {

        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/login/validate', [LoginController::class, 'loginValidate'])->name('login.validate');

    });

    Route::group(['middleware' => 'CheckAdminLogin'], function () {
        
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/admin_user', [AdminUserController::class, 'list'])->name('admin_user');
        Route::get('/admin_user/create', [AdminUserController::class, 'create'])->name('admin_user.create');
        Route::post('/admin_user/store', [AdminUserController::class, 'store'])->name('admin_user.store');
        Route::post('/admin_user/disable', [AdminUserController::class, 'disable'])->name('admin_user.disable');
        Route::delete('/admin_user/delete/{id}', [AdminUserController::class, 'delete'])->name('admin_user.delete');
        Route::get('/admin_user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin_user.edit');
        Route::post('/admin_user/update/{id}', [AdminUserController::class, 'update'])->name('admin_user.update');

        Route::get('/dev_user', [AndroidDevListController::class, 'list'])->name('dev_user');

    });

   
});
