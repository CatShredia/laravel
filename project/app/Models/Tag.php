<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = false;

    // у тега много постов
    public function blogs()
    {
        return $this->belongsToMany(Post::class, 'posts_tags', 'tag_id', 'post_id');
    }
}
