<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class PostEdit extends Component
{
    #[Validate('required|min:3')] 
    public $title;
    public $slug;
    public $content;

    #[Validate('required|numeric')] 
    public $category_id;

    public $post_id;
    
    public function mount($id) {
        $this->post_id = $id;
        $post = Post::find($id);

        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->content = $post->content;
        $this->category_id = $post->category_id;
    }

    public function save()
    {
        $this->validate();

        Post::find($this->post_id)->update([
            'title' => $this->title,
            'slug' => Str::of($this->title)->slug('-'),
            'content' => $this->content,
            'category_id' => $this->category_id,
        ]);
        session()->flash('status', 'successfully updated');
        return $this->redirectRoute('post.index',navigate:true);
    }
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.post.post-edit');
    }
}
