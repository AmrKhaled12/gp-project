<?php

namespace App\Classes;
use App\Trait\Functions_Of_Male;

class Male
{
    use Functions_Of_Male;

    private $age;
    private $height;
    private $weight;
    private $activity;

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function get_age()
    {
        return $this->age;
    }
    public function set_activity($activity)
    {
        $this->activity = $activity;
    }

    public function get_activity()
    {
        return $this->activity;
    }


    public function set_height($height)
    {
        $this->height = $height;
    }

    public function get_height()
    {
        return $this->height;
    }


    public function set_weight($weight)
    {
        $this->weight = $weight;
    }

    public function get_weight()
    {
        return $this->weight;
    }


}

