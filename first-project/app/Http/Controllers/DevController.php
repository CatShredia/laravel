<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;

class DevController extends Controller
{
    public function index()
    {
        $post = Post::find(1);

        // dump($post);

        // dump($post->category);

        dump($post->tags);

        $post = All()
            ->where('post_id', '=', 4)
            ->get();

        dump($post);
    }
}
