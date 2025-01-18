<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Post;


class UpdateController extends PostController
{
    // что-то типо конструтора
    public function __invoke(Post $post, UpdateRequest $request)
    {
        $data = $request->validated();

        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        $post->update($data);
        // добавление новых и удаление старых записей
        $post->tags()->sync($tags);

        // return dd($data);

        return redirect()->route('post.show', $post);
    }
}
