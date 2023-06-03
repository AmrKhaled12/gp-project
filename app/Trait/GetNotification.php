<?php

namespace App\Trait;

use App\Models\Notification;

trait GetNotification
{
    public function get_notification()
    {
        session_start();
        return Notification::with('follow', 'comment', 'replay', 'user', 'post')->where('user_id', '=', $_SESSION['client']->id)->get();
    }
}
