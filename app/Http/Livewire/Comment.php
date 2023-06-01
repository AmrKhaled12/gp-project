<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $num=1;
    public function render()
    {
        return view('livewire.comment');
    }
    public function add(){
        $this->num++;
    }
}
