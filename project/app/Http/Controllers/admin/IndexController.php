<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.index', compact('categories', 'tags'));
    }

    public function redirect()
    {
        return redirect(route('admin.index'));
    }
}
