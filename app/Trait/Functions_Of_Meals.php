<?php

namespace App\Trait;

use App\Models\Meal;

trait Functions_Of_Meals
{

    private $plan_meals;
    private $macros;

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
                        'fat_meal_1'    => round($macros['fats'] * 0.25, 1),
                        'fat_meal_2'    => round($macros['fats'] * 0.35, 1),
                        'fat_meal_3'    => round($macros['fats'] * 0.3, 1),
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
                        'protein_meal_1' => ($macros['protein'] * 0.2),
                        'protein_meal_2' => ($macros['protein'] * 0.45),
                        'protein_meal_3' => ($macros['protein'] * 0.2),
                        'protein_meal_4' => ($macros['protein'] * 0.05),
                        'carb_meal_1'    => ($macros['carbs'] * 0.27),
                        'carb_meal_2'    => ($macros['carbs'] * 0.3),
                        'carb_meal_3'    => ($macros['carbs'] * 0.25),
                        'carb_meal_4'    => ($macros['carbs'] * 0.15),
                        'fats_meal_1'    => ($macros['fats'] * 0.25),
                        'fats_meal_2'    => ($macros['fats'] * 0.3),
                        'fats_meal_3'    => ($macros['fats'] * 0.3),
                        'fats_meal_4'    => ($macros['fats'] * 0.10),
                    ];
                break;
        }
    }

    public function breakfast($plan_meals, $macros, $id_breakfast)
    {
        $macros_split = $this->culc_macros_meal($plan_meals, $macros);

        $arr_breakfast = [
            'protein' => $macros_split['protein_meal_1'],
            'carb' => $macros_split['carb_meal_1'],
            'fat' => $macros_split['fat_meal_1']
        ];
        $clories_breakfast = ($arr_breakfast['protein'] * 4) + ($arr_breakfast['carb'] * 4) + ($arr_breakfast['fat'] * 9);

        $meal = Meal::find($id_breakfast);
        $units_meal = $meal->compontent_meals;
        if
        (
            ($meal->calories_meal - $clories_breakfast) < 15
        and ($meal->calories_meal - $clories_breakfast) > -15
        )
        {
            return
            [
                'meal' => $meal->setHidden(['compontent_meals','created_at','updated_at']),
                'compontent_meal' => $units_meal
            ];
        }

        else {

            $range_p = $arr_breakfast['protein'] - $meal->protein;
            $range_c = $arr_breakfast['carb'] - $meal->carb;
            $range_f = $arr_breakfast['fat'] - $meal->fat;
            $add = $range_p / count($units_meal);

            foreach ($units_meal as $unit) {
                $p = $unit->protein;
                $unit->protein += $add;
                $unit->carb = (($p + $add) / $p) * $unit->carb;
                $unit->fat = (($p + $add) / $p) * $unit->fat;
                $unit->weight = (($p + $add) / $p) * $unit->weight;
            }
            $meal->protein = $units_meal->sum('protein');
            $meal->carb = $units_meal->sum('carb');
            $meal->fat = $units_meal->sum('fat');
            $meal->calories_meal = ($units_meal->sum('protein') * 4) + ($units_meal->sum('carb') * 4) + ($units_meal->sum('fat') * 9);
            return
            [
                'meal' => $meal->setHidden(['compontent_meals','created_at','updated_at']),
                'compontent_meal' => $units_meal
            ];
        }

    }
}
