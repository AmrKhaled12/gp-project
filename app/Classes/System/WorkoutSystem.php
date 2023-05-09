<?php

namespace App\Classes\System;

use App\Classes\PrepareWorkout\Workout;

class WorkoutSystem implements ISystem
{
    private Workout $workout;
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function Build()
    {
        if ($this->data->workout_tools != null) {
            $this->workout = new Workout($this->data->workout_tools, $this->data->number_of_days);
            return $this->workout->Culculate_Workout();
        } else {
            $this->workout = new Workout($this->data->workout_place, $this->data->number_of_days);
            return $this->workout->Culculate_Workout();
        }
    }
}
