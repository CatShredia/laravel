<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::All();

        dump($posts);

        return view('posts', compact('posts'));
    }

    public function create()
    {
        $posts_arr = [
            [
                'title' => 'title of post 1',
                'content' => 'content of post 1',
                'image_url' => 'test.png',
                'likes' => 20,
                'isPublished' => 0
            ],
            [
                'title' => 'title of post 2',
                'content' => 'content of post 2',
                'image_url' => 'tes2t.png',
                'likes' => 30,
                'isPublished' => 1
            ]
        ];
        Post::create([
            'title' => 'title of post 2',
            'content' => 'content of post 2',
            'image_url' => 'tes2t.png',
            'likes' => 30,
            'isPublished' => 1
        ]);

        foreach ($posts_arr as $post) {
            Post::create($post);
        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(1);

        // изменение данных, правда необходимо указывать все колонки
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image_url' => 'updated',
            'likes' => 60,
            'isPublished' => 1
        ]);

        dd('update');
    }

    public function deleteAll()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->delete();
        }

        $post = Post::withTrashed()->find(1);
        $post->restore();


        dd('delete all posts');
    }

    public function firstOrCreate()
    {

        for ($i = 1; $i < 6; $i++) {
            $post = Post::withTrashed()->find($i);

            $post->restore();
        }

        $post = Post::firstOrCreate(['title' => 'name'], [
            'title' => 'name',
            'content' => 'namemeeee',
            'image_url' => 'bgr',
            'likes' => 604,
            'isPublished' => 0
        ]);

        dump('first or create');
    }

    public function updateOrCreate()
    {

        for ($i = 1; $i < 6; $i++) {
            $post = Post::withTrashed()->find($i);

            $post->restore();
        }

        $post = Post::updateOrCreate(['title' => 'name'], [
            'title' => 'nam4e',
            'content' => 'namemeeee',
            'image_url' => 'bgr',
            'likes' => 6452304,
            'isPublished' => 0
        ]);

        dump('update or create');
    }
}
