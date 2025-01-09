<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\StartPageController;
use App\Http\Controllers\AboutController;




Route::get('/', [StartPageController::class, 'index'])->name('start.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');



Route::get('/create', [PostController::class, 'create']);

Route::get('/update', [PostController::class, 'update']);

Route::get('/deleteAll', [PostController::class, 'deleteAll']);

Route::get('/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/update_or_create', [PostController::class, 'updateOrCreate']);

