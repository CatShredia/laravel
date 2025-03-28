<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Category;

use Livewire\Component;

class CountPages extends Component
{
    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.count-pages', compact('categories', 'tags'));
    }
}
