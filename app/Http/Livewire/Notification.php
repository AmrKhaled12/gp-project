<?php

namespace App\Http\Livewire;

use App\Trait\GetNotification;
use Livewire\Component;

class Notification extends Component
{
    use GetNotification;
    public $notifications;

    protected $listeners = ["notify" => '$refresh'];

    public function render()
    {
        $this->notifications = $this->get_notification();
        return view('livewire.notification');
    }
}
