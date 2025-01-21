<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends BaseController
{
    // что-то типо конструтора
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        dump($data);

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->get();

        dump($posts);
    }
}