<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;

class DevController extends Controller
{
    public function __invoke()
    {
        $post = Post::find(1);

        // dump($post);

        // dump($post->category);

        dump($post->tags);

        $post = Post::where('id', 1)->get();

        dump($post);
    }
}
