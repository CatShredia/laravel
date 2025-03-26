<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function store($data)
    {
        // создаем новый объект в БД, который по ключам заполняем данными от пользователя
        $category = Category::create($data);
    }

    public function update($data, $post)
    {
        // $tags = $data['tag_ids'];
        // unset($data['tag_ids']);


        // $post->update($data);
        // // добавление новых и удаление старых записей
        // $post->tags()->sync($tags);
    }
}
