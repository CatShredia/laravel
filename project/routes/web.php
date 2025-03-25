<?php

use App\Http\Controllers\Admin\Main\IndexController as AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

// !index
Route::get('/', [IndexController::class, 'index']);

// !posts
Route::group(['namespace' => 'posts', 'prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index']);
});

// !admin LTE
Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminController::class, 'index']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
