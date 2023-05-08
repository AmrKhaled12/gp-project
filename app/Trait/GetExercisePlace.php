<?php

namespace App\Trait;

use App\Models\Exercise;

trait GetExercisePlace
{

    public function GetExercisePlace($place)
    {

        switch ($place) {
            case 'Home':
                return Exercise::with('muscle')->where('Exercise_Place', '=', 'Home')->get();
                break;

            case 'Dumbble':
                return Exercise::with('muscle')->where('Exercise_Place', '=', 'Dumbble')->get();
                break;

            case 'Bar':
                return Exercise::with('muscle')->where('Exercise_Place', '=', 'Bar')->get();
                break;

            default:
                return Exercise::with('muscle')->where('Exercise_Place', '=', 'Gym')->get();
                break;
        }
    }
}
