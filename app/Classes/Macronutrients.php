<?php

namespace App\Classes;

abstract class Macronutrients
{
    public $protein;
    public $carbs;
    public $fats;
    public  function LoseFat($myCal){
        $protein=round(($myCal*0.175)/4,1);
        $carbs=round(($myCal*0.60)/4,1);
        $fats=round(($myCal*0.225)/9,1);
        $this->protein=$protein;
        $this->carbs=$carbs;
        $this->fats=$fats;
    }

    public function MaintainWeight($myCal){
        $protein=round(($myCal*0.15)/4,1);
        $carbs=round(($myCal*0.60)/4,1);
        $fats=round(($myCal*0.25)/9,1);
        $this->protein=$protein;
        $this->carbs=$carbs;
        $this->fats=$fats;
    }


    public function BuildMuscle($myCal)
    {
        $protein = round(($myCal * 0.20) / 4, 1);
        $carbs = round(($myCal * 0.55) / 4, 1);
        $fats = round(($myCal * 0.25) / 9, 1);
        $this->protein=$protein;
        $this->carbs=$carbs;
        $this->fats=$fats;
    }
}
