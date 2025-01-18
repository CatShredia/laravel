<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends PostController
{
    // что-то типо конструтора
    public function __invoke()
    {
        $posts = Post::all();
        $post = Post::find(1);

        return view('posts.index', compact('posts'));
    }
}
