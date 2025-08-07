<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;

class UserAdd extends Component
{
     #[Rule('required')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    public function save()
    {
        $this->validate();

        User::factory()->create([
            "name" => $this->name,
            "email" => $this->email,
        ]);

        $this->reset();

        return redirect("/users");
    }

    public function render()
    {
        return view('livewire.users.user-add');
    }
}
