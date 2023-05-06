<?php

namespace App\Trait;

use App\Classes\Female;
use App\Classes\Male;
use App\Models\User;
use App\Models\WorkoutData;

trait GetData
{
    public static function data_of_workout_and_nutrition($id)
    {
        $data = User::with('WorkoutData', 'nutrition')->find($id);
        return $data;

    }
}
