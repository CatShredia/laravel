<?php

use App\Http\Controllers\StartPageController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DeleteController;

use Illuminate\Support\Facades\Route;

// получаем начальную страницу
Route::get('/', [StartPageController::class, '__invoke'])->name('start.index');

// получаем страницу разработчика
Route::get('/dev', [DevController::class, '__invoke'])->name('dev.index');

// получаем страницу про компанию
Route::get('/about', [AboutController::class, '__invoke'])->name('about.index');


//  страницы связанные с постами
Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {

    // получаем страницу с постами
    Route::get('/posts', [IndexController::class, '__invoke'])->name('post.index');


    // страница с формами, где происходит создание поста
    Route::get('/create', [CreateController::class, '__invoke'])->name('create.create');
    // при нажатии на кнопку с типом submit происходит обращение именно к этому запросу
    // где создается пост в БАЗЕ
    Route::post('/posts', [StoreController::class, '__invoke'])->name('post.store');

    // получаем страницу с ОДНИМ постом
    Route::get('/posts/{post}', [ShowController::class, '__invoke'])->name('post.show');

    // получаем страницу изменения ОДНОГО поста
    Route::get('/posts/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
    // именно через этот запрос изменяется пост в БАЗЕ
    Route::patch('/posts/{post}', [UpdateController::class, '__invoke'])->name('post.update');


    // удаление поста
    Route::delete('/posts/{post}', [DeleteController::class, '__invoke'])->name('post.delete');
});
