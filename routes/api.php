<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AutorController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', function () {
    return view('Admin.login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'autor'], function () {
        Route::get('/list-all', [AutorController::class, 'listAll']);
        Route::get('/store-autor', [CategoryController::class, 'storeAutor']);
        Route::get('/show-autor', [CategoryController::class, 'showAutor']);
        Route::get('/update-autor', [CategoryController::class, 'updateAutor']);
        Route::get('/delete-autor', [CategoryController::class, 'deleteAutor']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/list-all', [BlogController::class, 'index']);
        Route::get('/store-blog', [CategoryController::class, 'storeBlog']);
        Route::get('/show-blog', [CategoryController::class, 'showBlog']);
        Route::get('/update-blog', [CategoryController::class, 'updateBlog']);
        Route::get('/delete-blog', [CategoryController::class, 'deleteBlog']);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/list-all', [CategoryController::class, 'index']);
        Route::get('/store-category', [CategoryController::class, 'storeCategory']);
        Route::get('/show-category', [CategoryController::class, 'showCategory']);
        Route::get('/update-category', [CategoryController::class, 'updateCategory']);
        Route::get('/delete-category', [CategoryController::class, 'deleteCategory']);
    });
});
