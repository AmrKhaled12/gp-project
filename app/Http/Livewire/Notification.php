<?php

namespace App\Http\Livewire;

use App\Trait\GetNotification;
use Livewire\Component;

class Notification extends Component
{
    use GetNotification;
    public $notifications;
    public $icon = 0;
    protected $listeners = ["notify" => 'changeColor', 'changed' => '$refresh'];

    public function render()
    {

        $this->notifications = $this->get_notification();
        return view('livewire.notification');
    }
    public function changeColor()
    {
        $this->icon = 1;
        $this->emit('changed');
    }
}
