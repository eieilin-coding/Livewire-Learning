<?php

namespace App\Livewire\Superadmin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
    public $search = '';

    public $name;

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
      $this->reset( 'name',);
    }

    public function store() {
        $this->validate([
            'name' => 'required'
        ], ['name.required' => 'The name is required.']);
    }
}
