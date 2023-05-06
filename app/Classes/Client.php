<?php

namespace App\Classes;

class client extends Status
{
    public $id;
    public $name;
    public $photo;
    public $email;
    public $password;
    public $age;
    public $phone;
    public $height;
    public $weight;
    public $activity;
    public $gender;
    public $exercise_level;
    public $body_fat;
    public $allergy;
    public $goal;
    public $my_real_calories;


    public function setData($data)
    {
        $this->id = $data->id;
        $this->goal = $data->nutrition->goal;
        $this->age = $data->age;
        $this->name = $data->name;
        $this->gender = $data->WorkoutData->gender;
        $this->body_fat = $data->WorkoutData->body_fat;
        $this->allergy = $data->nutrition->allergy;
        $this->activity = $data->WorkoutData->activity_rate;
        $this->email = $data->email;
        $this->password = $data->password;
        $this->photo = $data->phone;
        $this->height = $data->WorkoutData->height;
        $this->weight = $data->WorkoutData->weight;
        $this->exercise_level = $data->WorkoutData->exercise_level;
    }
    public function calc_status(){
        if($this->gender==1) {
            $this->status_for_male($this->weight, $this->height, $this->age, $this->activity);
        }
        else{
            $this->status_for_female($this->weight, $this->height, $this->age, $this->activity);
        }
    }
    public  function calc_mycal()
    {
        switch ($this->goal) {
            case 'Lose Fat':
                $mycal = $this->calories_with_ActivityRate - 500;
                $this->my_real_calories=$mycal;
                $this->LoseFat($mycal);
                break;

            case 'Build muscle':
                $mycal = $this->calories_with_ActivityRate + 500;
                $this->my_real_calories=$mycal;
                $this->BuildMuscle($mycal);
                break;

            default:
                $mycal =$this->calories_with_ActivityRate;
                $this->my_real_calories=$mycal;
                $this->MaintainWeight($mycal);
                break;
        }
    }
}


