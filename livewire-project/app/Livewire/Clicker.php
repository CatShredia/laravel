<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component
{

    // нежелательно оставлять тут конфиденциальные данные

    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:5')]
    public $password;

    public function render()
    {
        $users = User::All();
        return view('livewire.clicker', [
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
