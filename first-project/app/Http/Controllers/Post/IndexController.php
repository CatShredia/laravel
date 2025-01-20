<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends BaseController
{
    // что-то типо конструтора
    public function __invoke()
    {
        $posts = Post::paginate(10);

        // не правильный фильтр
        // $posts = Post::where('isPublished', 1)->where('category_id', '1')->get();

        return view('posts.index', compact('posts'));
    }
}
