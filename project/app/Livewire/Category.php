<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cache;

use Livewire\Attributes\Rule;

class Category extends Component
{
    #[Rule('required')]
    public $title;

    public $editingId;
    public $editingTitle;

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

    public function DeleteCategory($id)
    {
        $deleted = CategoryModel::destroy($id);
    }

    public function SetEditingId($id)
    {
        $this->editingId = $id;
    }

    public function SetNullEditingId()
    {
        $this->editingId = null;
    }

    public function UpdateCategory($id)
    {
        $this->validateOnly('editingTitle');
        $category = CategoryModel::findOrFail($id);
        $category->update([
            'title' => $this->editingTitle,
        ]);
        $this->SetNullEditingId();

        $this->reset('editingTitle');
    }
}
