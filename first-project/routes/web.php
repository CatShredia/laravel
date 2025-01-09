<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::get('/', function () {
    return '<a href="/register/">Регистрация</a>';
});

Route::get('/', [PostController::class, 'index']);

Route::get('/create', [PostController::class, 'create']);

Route::get('/update', [PostController::class, 'update']);

Route::get('/deleteAll', [PostController::class, 'deleteAll']);

