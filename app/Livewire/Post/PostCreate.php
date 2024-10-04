<?php

namespace App\Livewire\Post;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class PostCreate extends Component
{
    #[Validate('required|min:3')] 
    public $title;
    public $slug;
    public $content;

    #[Validate('required|min:1|numeric')] 
    public $category_id;
    
    public function save()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'slug' => Str::of($this->title)->slug('-'),
            'content' => $this->content,
            'category_id' => $this->category_id,
        ]);
        session()->flash('status', 'successfully added');
        return $this->redirectRoute('category.index',navigate:true);
    }
    
    #[Layout('layouts.app')]
    public function render()
    {
        $categories = Category::all();
        return view('livewire.post.post-create',compact('categories'));
    }
}
