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
        Route::post('/store-autor', [AutorController::class, 'storeAutor']);
        Route::get('/show-autor/{autor_id}', [AutorController::class, 'showAutor']);
        Route::put('/update-autor/{autor_id}', [AutorController::class, 'updateAutor']);
        Route::delete('/delete-autor/{autor_id}', [AutorController::class, 'deleteAutor']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/list-all', [BlogController::class, 'listAll']);
        Route::post('/store-blog', [BlogController::class, 'storeBlog']);
        Route::get('/show-blog/{blog_id}', [BlogController::class, 'showBlog']);
        Route::put('/update-blog/{blog_id}', [BlogController::class, 'updateBlog']);
        Route::delete('/delete-blog/{blog_id}', [BlogController::class, 'deleteBlog']);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/list-all', [CategoryController::class, 'listAll']);
        Route::post('/store-category', [CategoryController::class, 'storeCategory']);
        Route::get('/show-category/{category_id}', [CategoryController::class, 'showCategory']);
        Route::put('/update-category/{category_id}', [CategoryController::class, 'updateCategory']);
        Route::delete('/delete-category/{category_id}', [CategoryController::class, 'deleteCategory']);
    });
});
