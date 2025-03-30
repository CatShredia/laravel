<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag as TagModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cache;

use Livewire\Attributes\Rule;

class Tag extends Component
{
    #[Rule('required')]
    public $title;

    public $editingId;
    public $editingTitle;

    public function render()
    {
        $categories = TagModel::all();

        return view('livewire.Tag', compact('categories'));
    }

    public function CreateTag()
    {
        $titleValidated = $this->validateOnly('title');

        TagModel::create($titleValidated);

        $this->reset('title');

        session()->flash('success', 'Tag was created!');
    }

    public function DeleteTag($id)
    {
        $deleted = TagModel::destroy($id);
    }

    public function SetEditingId($id)
    {
        $this->editingId = $id;
    }

    public function SetNullEditingId()
    {
        $this->editingId = null;
    }

    public function UpdateTag($id)
    {
        $this->validateOnly('editingTitle');
        $Tag = TagModel::findOrFail($id);
        $Tag->update([
            'title' => $this->editingTitle,
        ]);
        $this->SetNullEditingId();

        $this->reset('editingTitle');
    }
}
