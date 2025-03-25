<?php

use App\Http\Controllers\admin\IndexController as AdminIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class, 'index'])->name('test');

Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminIndexController::class, 'redirect']);
    Route::get('/index', [AdminIndexController::class, 'index'])->name('admin.index');
});
