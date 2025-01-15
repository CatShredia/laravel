<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::All();
        $tags = Tag::All();

        return view('posts.create', compact('categories', 'tags'));
    }
    public function edit(Post $post)
    {
        $categories = Category::All();
        $tags = Tag::All();

        return view('posts.edit', compact('post', 'categories', 'tags'));
    }
    public function update(Post $post)
    {

        $data = request()->validate([
            // это строчка нужна для проверки ключей, которые должны совпадать с name в форме и колонками в таблицы sql
            'title' => 'string',
            'content' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer'
        ]);



        $post->update($data);

        // return dd($data);

        return redirect()->route('post.show', $post);
    }

    public function store()
    {
        $data = request()->validate([
            // это строчка нужна для проверки ключей, которые должны совпадать с name в форме и колонками в таблицы sql
            'title' => 'string',
            'content' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'integer'
        ]);

        $tags = $data['tag_ids'];
        unset($data['tag_ids']);

        // создаем новый объект в БД, который по ключам заполняем данными от пользователя
        $post = Post::create($data);

        // добавляем связь в таблицу
        // ! 1 variant
        // foreach ($tags as $tag) {
        //     PostTag::firstOrCreate([
        //         'tag_id' => $tag,
        //         'post_id' => $post->id,
        //     ]);
        // }

        // ! 2 variant
        $post->tags()->attach($tags);

        // возвращаемся на страницу с постами через название роута
        return redirect()->route('post.index');
    }

    // $id указывается, когда в запросе есть например posts/{post},
    // где $id = тому, что пользователь напишет в строке браузера
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }

    public function updateOld()
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
