<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;

use App\Models\Post;


class UpdateController extends PostController
{
    // что-то типо конструтора
    public function __invoke(Post $post)
    {
        $data = request()->validate([
            // это строчка нужна для проверки ключей, которые должны совпадать с name в форме и колонками в таблицы sql
            'title' => 'string',
            'content' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'integer'
        ]);

        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        $post->update($data);
        // добавление новых и удаление старых записей
        $post->tags()->sync($tags);

        // return dd($data);

        return redirect()->route('post.show', $post);
    }
}
