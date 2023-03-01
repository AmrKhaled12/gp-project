<?php

namespace App\Trait;

use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Meal;
use App\Models\Snak;

trait Functions_Of_Meals
{



    public function culc_macros_meal($plan_meals, $macros)
    {
        switch ($plan_meals) {
            case '3 Meals':
                return
                    [
                        'protein_meal_1' => round($macros['protein'] * 0.2, 1),
                        'protein_meal_2' => round($macros['protein'] * 0.5, 1),
                        'protein_meal_3' => round($macros['protein'] * 0.2, 1),
                        'carb_meal_1'    => round($macros['carbs'] * 0.27, 1),
                        'carb_meal_2'    => round($macros['carbs'] * 0.35, 1),
                        'carb_meal_3'    => round($macros['carbs'] * 0.3, 1),
                        'fat_meal_1'    =>  round($macros['fats'] * 0.25, 1),
                        'fat_meal_2'    =>  round($macros['fats'] * 0.35, 1),
                        'fat_meal_3'    =>  round($macros['fats'] * 0.3, 1),
                    ];
                break;
                // case '3 Meals - 1 Snacks':
                //     return
                //     [
                //     'protein_1'=>($macros['protein']*0.3),
                //     'protein_2'=>($macros['protein']*0.45),
                //     'protein_3'=>($macros['protein']*0.2),
                //     'protein_4'=>($macros['protein']*0.05),
                //     'carb_1'   =>($macros['carbs']*0.3),
                //     'carb_2'   =>($macros['carbs']*0.3),
                //     'carb_3'   =>($macros['carbs']*0.25),
                //     'carb_4'   =>($macros['carbs']*0.15),
                //     'fats_1'   =>($macros['fats']*0.3),
                //     'fats_2'   =>($macros['fats']*0.3),
                //     'fats_3'   =>($macros['fats']*0.3),
                //     'fats_4'   =>($macros['fats']*0.10),
                //     ];
                //     break;
            default:
                return
                    [
                        'breakfast'=>[
                            'protein' =>($macros['protein'] * 0.20),
                            'carb' =>($macros['carbs'] * 0.27),
                            'fat' =>($macros['fats'] * 0.25),
                            'cals'=>(($macros['protein'] * 0.20)*4)+
                                    (($macros['carbs'] * 0.27)*4)+
                                    (($macros['fats'] * 0.25)*9)
                        ],
                        'lunch'=>[
                            'protein' =>($macros['protein'] * 0.40),
                            'carb' =>($macros['carbs'] * 0.30),
                            'fat' =>($macros['fats'] * 0.28),
                            'cals'=>(($macros['protein'] * 0.40)*4)+
                                (($macros['carbs'] * 0.30)*4)+
                                (($macros['fats'] * 0.28)*9)
                        ],
                        'dinner'=>[
                                'protein' =>($macros['protein'] * 0.23),
                                'carb' =>($macros['carbs'] * 0.23),
                                'fat' =>($macros['fats'] * 0.24),
                                'cals'=>(($macros['protein'] * 0.23)*4)+
                                        (($macros['carbs'] * 0.23)*4)+
                                        (($macros['fats'] * 0.24)*9)
                            ],
//                        'snak'=>[
//                                    'protein' =>($macros['protein'] * 0.17),
//                                    'carb' =>($macros['carbs'] * 0.20),
//                                    'fat' =>($macros['fats'] * 0.23),
//                                    'cals'=>(($macros['protein'] * 0.17)*4)+
//                                            (($macros['carbs'] * 0.20)*4)+
//                                            (($macros['fats'] * 0.23)*9)
//                                ],
                        ];
                // break;
        }
    }
    public function meal($plan_meals, $macros,$id,$model,$type){

        $meals = $this->culc_macros_meal($plan_meals, $macros);
        $meal = $model::find($id);
        $units_meal = $meal->compontent_meals;
        if
        (
            ($meal->calories_meal - $meals[$type]['cals']) < 15
            and ($meal->calories_meal - $meals[$type]['cals']) > -15
        ){
            return
                [
                    'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                    'compontent_meal' => $units_meal
                ];
        }


            $range_p = $meals[$type]['protein'] - $meal->protein;
            $add = $range_p / count($units_meal);

            foreach ($units_meal as $unit) {
                $p = $unit->protein;
                if($add>$p){
                    $p=$add;
                }
                $unit->protein += $add;
                $unit->carb = (($p + $add) / $p) * $unit->carb;
                $unit->fat = (($p + $add) / $p) * $unit->fat;
                $unit->weight = (($p + $add) / $p) * $unit->weight;
                $unit->calories=($unit->carb*4)+($unit->protein*4)+($unit->fat*9);
            }
            $meal->protein = $units_meal->sum('protein');
            $meal->carb = $units_meal->sum('carb');
            $meal->fat = $units_meal->sum('fat');
            $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat') * 9);

                return
                    [
                        'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                        'compontent_meal' => $units_meal,

                    ];
        }

    public function snaks($meals,$macros,$id){
        $meal=Snak::find($id);
        $units_meal = $meal->compontent_meals;
        $full_protein=0;
        $full_carb=0;
        $full_fat=0;
        $full_cals=0;
        foreach ($meals as $unit){
            $full_cals+=$unit['meal']['calories_meal'];
            $full_fat+=$unit['meal']['fat'];
            $full_protein+=$unit['meal']['protein'];
            $full_carb+=$unit['meal']['carb'];
        }
        $protein_of_snak=$macros['protein']-$full_protein;
        $carb_of_snak=$macros['carbs']-$full_carb;
        $fat_of_snak=$macros['fats']-$full_fat;

        $rang_p=$protein_of_snak-$meal->protein;
        $add = $rang_p / count($units_meal);
        foreach ($units_meal as $unit) {
            $p = $unit->protein;
            if($add>$p){
                $p=$add;
            }
            $unit->protein += $add;
            $unit->carb = (($p + $add) / $p) * $unit->carb;
            $unit->fat = (($p + $add) / $p) * $unit->fat;
            $unit->weight = (($p + $add) / $p) * $unit->weight;
            $unit->calories=($unit->carb*4)+($unit->protein*4)+($unit->fat*9);
        }
        $meal->protein = $units_meal->sum('protein');
        $meal->carb = $units_meal->sum('carb');
        $meal->fat = $units_meal->sum('fat');
        $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat')*9);
        return
            [
                'meal' => $meal->setHidden(['compontent_meals', 'created_at', 'updated_at']),
                'compontent_meal' => $units_meal,

            ];
    }

}



