<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = false;

    // у поста одна категория
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // у поста много тегов
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags', 'post_id', 'tag_id');
    }
}
