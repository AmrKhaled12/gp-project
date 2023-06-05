<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Like as likes;
use Livewire\Component;

class Like extends Component
{
    public $counter_like = 0;
    public $counter_comment = 0;
    public $post_id;
    public $comment;
    public $like_btn;


    public function render()
    {
        $this->counter_like = likes::where('post_id', '=', $this->post_id)->get()->count();
        $this->counter_comment = Comment::where('post_id', '=', $this->post_id)->get()->count();
        $this->like_btn = likes::select('is_like')->where('post_id', '=', $this->post_id)->where('user_id', '=', $_SESSION['client']->id)->exists();

        return view('livewire.like');
    }

    public function insert_like()
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
        $this->counter_like = likes::where('post_id', '=', $this->post_id)->get()->count();
    }

    public function insert_comment()
    {
        session_start();
        Comment::create([
            'text' => $this->comment,
            'post_id' => $this->post_id,
            'user_id' => $_SESSION['client']->id,
        ]);

        $this->counter_comment = Comment::where('post_id', '=', $this->post_id)->get()->count();
    }
}
