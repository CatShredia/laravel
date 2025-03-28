<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CountCategory extends Component
{
    public function render()
    {
        $count = Category::count();

        return view('livewire.count-category', ['count' => $count]);
    }
}
