<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

    public $editingId;

    #[Rule('required')]
    public $editingName;

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
        $nameValidated = $this->validateOnly('name');

        Todo::create($nameValidated);

        $this->reset('name');

        session()->flash('success', 'Todo was created');

        $this->resetPage();
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

        $this->resetPage();
    }

    public function changeCompleted(Todo $todo)
    {
        $todo = Todo::find($todo->id);

        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function editTodo($todoId)
    {
        $this->editingId = $todoId;
    }

    public function cancelEditing()
    {
        $this->editingId = null;
    }

    public function updateTodo($todoId)
    {
        try {
            $this->validateOnly('editingName');
            $todo = Todo::findOrFail($todoId); // Выбрасывает исключение, если не найдено
            $todo->update([
                'name' => $this->editingName,
            ]);
            $this->cancelEditing();

            $this->reset('editingName');
        } catch (ModelNotFoundException $e) {
            session()->flash('error', 'Todo not found!');
        }
    }
}
