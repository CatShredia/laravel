<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;

use Illuminate\Support\Facades\Cache;

use Livewire\Attributes\Rule;

class Category extends Component
{
    #[Rule('required')]
    public $title;

    public function render()
    {
        $categories = CategoryModel::all();

        return view('livewire.category', compact('categories'));
    }

    public function CreateCategory()
    {
        $titleValidated = $this->validateOnly('title');

        CategoryModel::create($titleValidated);

        $this->reset('title');

        session()->flash('success', 'Category was created!');
    }
}
