<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Layout;

class CategoryList extends Component
{
    public function delete($id)
    {
        Category::find($id)->delete();
        session()->flash('status', 'Successfully Deleted.');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.category-list', compact('categories'));
    }
}
