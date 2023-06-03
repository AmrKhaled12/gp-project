<?php

namespace App\Http\Livewire;

use App\Models\Like as likes;
use Livewire\Component;

class Like extends Component
{
    public $counter = 0;
    public $post_id;
    protected $listeners = ["like" => 'Like'];

    public function mount($post_id)
    {
        $this->post_id = $post_id;
    }

    public function render()
    {
        $this->counter = likes::where('post_id', '=', $this->post_id)->get()->count();
        return view('livewire.like');
    }

    public function Like($post_id)
    {
        session_start();
        $like = likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $post_id)->first();
        if (!isset($like)) {
            likes::create([
                'user_id' => $_SESSION['client']->id,
                'post_id' => $post_id,
                'is_like' => 1
            ]);
        } else {
            likes::where('user_id', '=', $_SESSION['client']->id)->where('post_id', '=', $post_id)->truncate();
        }
        $this->counter = likes::where('post_id', '=', $post_id)->get()->count();
        // return $this->counter = $post_id;
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
