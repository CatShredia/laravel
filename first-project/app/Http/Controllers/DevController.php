<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class DevController extends Controller
{
    public function index()
    {
        $category = Post::find(8);

        dd($category);
    }
}
