<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index()
    {
        return view('start');
    }
}
