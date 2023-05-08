<?php

namespace App\Classes\PrepareWorkout;

use App\Trait\GetExercisePlace;
use App\Trait\GetExerciseType;

class Workout
{
    use GetExercisePlace, GetExerciseType;

    private $place;
    private $num_days;

    public function __construct($place, $num_days)
    {
        $this->place = $place;
        $this->num_days = $num_days;
    }

    public function Culculate_Workout()
    {
        $data = $this->GetExercisePlace($this->place);
        return $this->GetExerciseType($this->num_days, $data);
    }
}
