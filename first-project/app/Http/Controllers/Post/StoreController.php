<?php

namespace App\Http\Controllers\Post;


use Illuminate\Http\Request;

use App\Models\Post;


class StoreController extends PostController
{
    // что-то типо конструтора
    public function __invoke(Post $post)
    {
        $data = request()->validate([
            // это строчка нужна для проверки ключей, которые должны совпадать с name в форме и колонками в таблицы sql
            // required - указываем то, что поле должно быть заполнено
            'title' => 'required|string',
            'content' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'integer'
        ]);

        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        // создаем новый объект в БД, который по ключам заполняем данными от пользователя
        $post = Post::create($data);

        $post->tags()->attach($tags);

        // возвращаемся на страницу с постами через название роута
        return redirect()->route('post.index');
    }
}
