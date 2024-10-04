<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PostList extends Component
{
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('status', 'Successfully Deleted.');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $post = Post::latest();
        return view('livewire.post.post-list',compact('post'));
    }
}
