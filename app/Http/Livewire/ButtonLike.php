<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonLike extends Component
{
    public $post_id;
    public function mount($post_id)
    {
        $this->post_id = $post_id;
    }
    public function render()
    {
        return view('livewire.button-like');
    }

    public function event()
    {

        $this->emit('like', $this->post_id);
    }
}
