<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Like extends Component
{
    public $counter = 0;

    public function render()
    {
        return view('livewire.like');
    }

    public function like()
    {
        // session_start();
        // $like = Like::where('user_id', '=', $_SESSION['client']->id && 'post_id', '=', $post->id)->first();
        // if ($like->is_like != 1) {
        //     Like::create([
        //         'user_id' => $_SESSION['client']->id,
        //         'post_id' => $post->id,
        //         'is_like' => 1
        //     ]);
        // }
        $this->counter = Like::get()->count();
    }
}
