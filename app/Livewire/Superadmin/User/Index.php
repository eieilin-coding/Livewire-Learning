<?php

namespace App\Livewire\Superadmin\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
    public $search = '';

    public $name, $email, $role, $password, $password_confirmation, $user_id;

    public function render()
    {
        $data = array( 
            'title' => 'Data User',
            'user' => User::where('name','like','%'. $this->search . '%' )
                                ->orWhere('email','like','%'. $this->search . '%' )
                                ->orWhere('role','like','%'. $this->search . '%' )
                                ->orderBy('role', 'ASC')->paginate($this->paginate));
        return view('livewire.superadmin.user.index', $data);
    }

    public function create() {
      $this->resetValidation();
      $this->reset( 'name','email', 'role', 'password', 'password_confirmation');
    }

    public function store() {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
        ], 
        ['name.required' => 'The name is required.',
        'email.email' => 'The email is invalid.',
        'role.required' => 'The role is required.',
        'password.min' => 'Mininal 8 characters required.',        
        'password.confirmed' => 'The passwords do not match.',
        'password_confirmation.required' => 'The confirm password is required.'],
    );
    $user = new User();
    $user->name = $this->name;
    $user->email = $this->email;
    $user->role = $this->role;
    $user->password = bcrypt($this->password);
    $user->save();

     $this->dispatch('closeCreateModal');
    }

    public function edit($id){
        $this->resetValidation();
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->password = '';
        $this->password_confirmation = '';
        $this->user_id = $user->id;        
    }

    public function update($id){
        $user = User::findOrFail($id);

         $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required',
            'password' => 'nullable|min:8|confirmed',
        ], 
        ['name.required' => 'The name is required.',
        'email.email' => 'The email is invalid.',
        'email.unique' => 'The email name is already taken.',
        'role.required' => 'The role is required.',
        'password.min' => 'Mininal 8 characters required.',        
        ]
    );

    $user->name = $this->name;
    $user->email = $this->email;
    $user->role = $this->role;

    if(filled($this->password)) {
        $user->password = Hash::make($this->password);
    }
    
    $user->save();

     $this->dispatch('closeEditModal');

    }
    public function confirm($id){
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->user_id = $user->id;
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

         $this->dispatch('closeDeleteModal');
    }
}
