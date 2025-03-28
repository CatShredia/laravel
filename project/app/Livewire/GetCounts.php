<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class GetCounts extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.get-counts', compact('categories'));
    }
}
