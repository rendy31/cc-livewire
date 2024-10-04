<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class CategoryCreate extends Component
{
    #[Validate('required|min:3')] 
    public $name;
    public $slug;
    
    public function save()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,
            'slug' => Str::of($this->name)->slug('-')
        ]);
        session()->flash('status', 'successfully added');
        return $this->redirectRoute('category.index',navigate:true);
    }
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.category.category-create');
    }
}
