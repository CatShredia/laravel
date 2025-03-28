<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;
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
        $nameValidated = $this->validateOnly('title');

        CategoryModel::create($nameValidated);

        $this->reset('title');

        session()->flash('success', 'Category was created!');
    }
}
