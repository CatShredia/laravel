<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\StartPageController;
use App\Http\Controllers\AboutController;



// получаем начальную страницу
Route::get('/', [StartPageController::class, 'index'])->name('start.index');

// получаем страницу про компанию
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// получаем страницу с постами
Route::get('/posts', [PostController::class, 'index'])->name('post.index');


// страница с формами, где происходит заполнение данных пользователем
Route::get('/create', [PostController::class, 'create'])->name('create.create');
// при нажатии на кнопку с типом submit происходит обращение именно к этому запросу
Route::post('/posts', [PostController::class, 'store'])->name('post.store');

// получаем страницу с ОДНИМ постом
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
// получаем страницу изменения ОДНОГО поста
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');

// удаление поста
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');


Route::get('/updateOld', [PostController::class, 'updateOld']);

Route::get('/deleteAll', [PostController::class, 'deleteAll']);

Route::get('/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/update_or_create', [PostController::class, 'updateOrCreate']);

