<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class StartPageController extends Controller
{
    public function index()
    {
        return view('start');
    }
}
