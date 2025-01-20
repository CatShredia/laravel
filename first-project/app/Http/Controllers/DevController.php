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
        $postsPag = Post::paginate(10);
        $postsAll = Post::all();

        dump($postsPag);
        dump($postsAll);
    }
}
