<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination; // Импортируем Hash facade

class Clicker extends Component
{

    use WithPagination;

    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:5')]
    public $password;

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.clicker', [
            'users' => $users,
        ]);
    }

    public function createNewUser()
    {
        // Валидируем все поля
        $validatedData = $this->validate();

        // Хешируем пароль
        $hashedPassword = Hash::make($this->password);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $hashedPassword,
        ]);

        $this->reset('name', 'email', 'password');

        session()->flash('success', 'User created successfully!');
    }
}
