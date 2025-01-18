<?php

namespace App\Http\Controllers\Post;


use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;

use App\Models\Post;


class StoreController extends PostController
{
    // что-то типо конструтора
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();

        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        // создаем новый объект в БД, который по ключам заполняем данными от пользователя
        $post = Post::create($data);

        $post->tags()->attach($tags);

        // возвращаемся на страницу с постами через название роута
        return redirect()->route('post.index');
    }
}
