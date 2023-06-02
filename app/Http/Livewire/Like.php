<?php

namespace App\Http\Livewire;

use App\Models\Like as likes;
use Livewire\Component;

class Like extends Component
{
    public $counter = 0;
    public $post_id;
    public function mount($post_id)
    {
        $this->post_id = $post_id;
    }
    public function render()
    {
        return view('livewire.like');
    }

    public function like()
    {
        session_start();
        $like = likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $this->post_id)->first();
        if (!isset($like)) {
            likes::create([
                'user_id' => $_SESSION['client']->id,
                'post_id' => $this->post_id,
                'is_like' => 1
            ]);
        } else {
            likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $this->post_id)->truncate();
        }
        $this->counter = likes::where('post')->get()->count();
        return $this->counter;
    }

    // public function comment()
    // {
    //     session_start();
    //     $like = Like::where('user_id', '=', $_SESSION['client']->id && 'post_id', '=', $this->post_id)->first();
    //     if ($like->is_like != 1) {
    //         Like::create([
    //             'user_id' => $_SESSION['client']->id,
    //             'post_id' => $this->post_id,
    //             'is_like' => 1
    //         ]);
    //     }
    //     $this->counter = Like::get()->count();
    //     return $this->counter;
    // }
}
