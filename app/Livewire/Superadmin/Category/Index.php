<?php

namespace App\Livewire\Superadmin\Category;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
    public $search = '';

    public $name, $category_id;

    public function render()
    {
        $data = array( 
            'title' => 'Data Category',
            'category' => Category::where('name','like','%'. $this->search . '%' )
                                ->orderBy('name', 'ASC')->paginate($this->paginate));
        return view('livewire.superadmin.category.index', $data);
    }

    public function create() {
      $this->resetValidation();
      $this->reset( 'name');
    }

    public function store() {
        $this->validate([
            'name' => 'required|unique:categories,name'           
        ], 
        ['name.required' => 'The name is required.',]
    );
    $category = new Category();
    $category->name = $this->name;
    
    $category->save();

     $this->dispatch('closeCreateModal');
    }

    public function edit($id){
        $this->resetValidation();
        $category = Category::findOrFail($id);
        $this->name = $category->name;
        $this->category_id = $category->id;        
    }

    public function update($id){
        $category = Category::findOrFail($id);

         $this->validate([
            'name' => 'required|unique:categories,name,'.$id ,
        ], 
        ['name.required' => 'The name is required.',     
        ]
    );

    $category->name = $this->name;
    
    $category->save();

     $this->dispatch('closeEditModal');

    }
    public function confirm($id){
        $category = Category::findOrFail($id);
        $this->name = $category->name;       
        $this->category_id = $category->id;
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();

         $this->dispatch('closeDeleteModal');
    }
}
