<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

// !index
Route::get('/', [IndexController::class, 'index']);

// !posts
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index']);
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
