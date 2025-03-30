<?php

use App\Http\Controllers\admin\IndexController as AdminIndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class, 'index'])->name('test');

Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminIndexController::class, 'redirect']);
    Route::get('/index', [AdminIndexController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'adminIndex'])->name('admin.category');
        Route::post('/store', [CategoryController::class, 'create'])->name('admin.category.store');
        Route::delete('/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', [TagController::class, 'adminIndex'])->name('admin.tag');
        Route::post('/store', [TagController::class, 'create'])->name('admin.tag.store');
        Route::delete('/delete/{category}', [TagController::class, 'delete'])->name('admin.tag.delete');
    });
});
