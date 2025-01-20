<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends BaseController
{
    // что-то типо конструтора
    public function __invoke()
    {


        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }
}
