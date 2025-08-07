<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public function render()
    {
        return view('livewire.users.user-list',[
            "users" => User::all()
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
