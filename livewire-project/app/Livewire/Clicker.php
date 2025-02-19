<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    // публичные поля становятся сразу доступными
    public $constant = "GVKvgjhgvkkh";

    public function createNewUser()
    {
        User::create([
            "name" => "test",
            "email" => "test@gmail.com",
            "password" => bcrypt("12345678"),
        ]);
    }
    public function render()
    {
        $title = "hi";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
