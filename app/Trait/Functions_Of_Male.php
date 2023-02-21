<?php

namespace App\Trait;

use App\Classes\Male;
use App\Models\WorkoutData;

trait Functions_Of_Male
{

    public function status($weight,$height,$age,$activity_rate){

        $bmr=round(66.47+(13.7*$weight)+(5*$height)-(6.8*$age),2);
        $activity =round( $bmr*$activity_rate,2);
        $bmi=round($weight/(($height/100)*($height/100)),2);
        return[
            'bmr'=>$bmr,
            'activity'=>$activity,
            'bmi'=>$bmi,
        ];

    }
    public function LoseFat($myCal){
        $protein=round(($myCal*0.25)/4,1);
        $carbs=round(($myCal*0.55)/4,1);
        $fats=round(($myCal*0.20)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }

    public function MaintainWeight($myCal){
        $protein=round(($myCal*0.25)/4,1);
        $carbs=round(($myCal*0.50)/4,1);
        $fats=round(($myCal*0.25)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }


    public function BuildMuscle($myCal){
        $protein=round(($myCal*0.30)/4,1);
        $carbs=round(($myCal*0.45)/4,1);
        $fats=round(($myCal*0.25)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }

}
