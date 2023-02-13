<?php

namespace App\Trait;

trait Functions_Of_Female
{
    public function status($weight,$height,$age,$activity_rate){

        $bmr=round(655.1+(9.6*$weight)+(1.8*$height)-(4.7*$age),2);
        $activity =round( $bmr*$activity_rate,2);
        $bmi=round($weight/(($height/100)*($height/100)),2);
        return[
            'bmr'=>$bmr,
            'activity'=>$activity,
            'bmi'=>$bmi,
        ];

    }

    public function LoseFat($myCal){
        $protein=round(($myCal*0.30)/4,1);
        $carbs=round(($myCal*0.50)/4,1);
        $fats=round(($myCal*0.20)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }

    public function MaintainWeight($myCal){
        $protein=round(($myCal*0.30)/4,1);
        $carbs=round(($myCal*0.40)/4,1);
        $fats=round(($myCal*0.30)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }


    public function BuildMuscle($myCal){
        $protein=round(($myCal*0.35)/4,1);
        $carbs=round(($myCal*0.40)/4,1);
        $fats=round(($myCal*0.25)/9,1);
        return[
            'protein'=>$protein,
            'carbs'=>$carbs,
            'fats'=>$fats
        ];
    }


}
