<?php

namespace App\Trait;

use App\Models\Exercise;

trait GetExerciseType
{

    public function Split_Exercies($data)
    {
        return
            [
                'chest' => $data->where('Exercise_Name', '=', 'Chest')->first(),
                'shoulder' => $data->where('Exercise_Name', '=', 'Shoulder')->first(),
                'back' => $data->where('Exercise_Name', '=', 'Back')->first(),
                'leg' => $data->where('Exercise_Name', '=', 'Leg')->first(),
                'biceps' => $data->where('Exercise_Name', '=', 'Biceps')->first(),
                'triceps' => $data->where('Exercise_Name', '=', 'Triceps')->first(),
                'stomach' => $data->where('Exercise_Name', '=', 'Stomach')->first(),
            ];
    }

    public function GetExerciseType($type, $data)
    {
        $muscles = $this->Split_Exercies($data);
        switch ($type) {

            case '3':
                return
                    [
                        'first_day' => [$muscles['chest'], $muscles['shoulder']],
                        'second_day' => [$muscles['back'], $muscles['biceps']],
                        'third_day' => [$muscles['leg'], $muscles['triceps'], $muscles['stomach']]

                    ];
                break;

            case '4':
                return
                    [
                        'first_day' => [$muscles['chest'], $muscles['shoulder']],
                        'second_day' => [$muscles['back'], $muscles['biceps']],
                        'third_day' => [$muscles['leg'], $muscles['triceps']],
                        'fourth_day' => [$muscles['stomach']],


                    ];
                break;
            case '5':
                return
                    [
                        'first_day' => [$muscles['shoulder']],
                        'second_day' => [$muscles['back'], $muscles['biceps']],
                        'third_day' => [$muscles['leg'], $muscles['triceps']],
                        'fourth_day' => [$muscles['stomach']],
                        'fifth_day' => [$muscles['chest']]

                    ];
                break;


            default:
                return
                    [
                        'first_day' => [$muscles['shoulder']],
                        'second_day' => [$muscles['biceps']],
                        'third_day' => [$muscles['leg'], $muscles['triceps']],
                        'fourth_day' => [$muscles['stomach']],
                        'fifth_day' => [$muscles['chest']],
                        'sixth_day' => [$muscles['back']]

                    ];
                break;
        }
    }
}
