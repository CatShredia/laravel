<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public function render()
    {
        $categories = CategoryModel::all();

        return view('livewire.category', compact('categories'));
    }
}
