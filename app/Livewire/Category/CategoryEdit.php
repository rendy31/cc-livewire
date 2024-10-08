<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class CategoryEdit extends Component
{
    #[Validate('required|min:3')] 
    public $name;

    public $slug;
    public $category_id;
    
    public function mount($id) {
        $this->category_id = $id;
        $category = Category::find($id);

        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function save()
    {
        $this->validate();
        
        // $this->slug = Str::slug($this->name);

        Category::find($this->category_id)->update([
            'name' => $this->name,
            'slug' => Str::of($this->name)->slug('-')
        ]);
        session()->flash('status', 'successfully updated');
        return $this->redirectRoute('category.index',navigate:true);
    }
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.category.category-edit');
    }
}
