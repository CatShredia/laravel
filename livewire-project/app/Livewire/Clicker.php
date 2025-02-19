<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    // нежелательно оставлять тут конфиденциальные данные
    public $name;
    public $email;
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
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }
}
