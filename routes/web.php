<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AutorController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'autor'], function () {
        Route::get('/', [AutorController::class, 'index'])->name('autors');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
    });
});


