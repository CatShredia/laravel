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

    public $completed;
    public function render()
    {
        $todos = Todo::where('name', 'like', "%{$this->search}%")->paginate(5);
        $hasTodos = $todos->isNotEmpty();
        if (!$hasTodos) {
            session()->flash('notfound', 'Search don\'t found anything');
        }

        return view('livewire.todo-list', compact('todos', 'hasTodos'));
    }

    public function createTodo()
    {
        $nameValidated = $this->validate();

        Todo::create($nameValidated);

        $this->reset('name');

        session()->flash('success', 'Todo was created');
    }
    public function deleteTodo($id)
    {
        $deleted = Todo::destroy($id);

        if ($deleted) {
            $lastDeletedTodo = Todo::onlyTrashed()
                ->orderBy('deleted_at', 'desc')
                ->first();

            session()->flash('success', "Todo ({$lastDeletedTodo->name}) for number {$lastDeletedTodo->id} deleted successfully!");
        } else {
            session()->flash('error', 'Todo not found!');
        }
    }

    public function changeCompleted(Todo $todo)
    {
        $todo = Todo::find($todo->id);

        $todo->completed = !$todo->completed;
        $todo->save();
    }
}
