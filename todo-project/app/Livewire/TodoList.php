<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{

    use WithPagination;

    #[Rule('required')]
    public $name;
    public $search = '';
    public function render()
    {
        $todos = Todo::paginate(5);

        return view('livewire.todo-list', compact('todos'));
    }

    public function createTodo()
    {
        $nameValidated = $this->validate();

        Todo::create($nameValidated);

        $this->reset();

        session()->flash('success', 'Todo was created');
    }
}
