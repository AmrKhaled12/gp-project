<?php

namespace App\Http\Controllers\Status;

use App\Classes\Female;
use App\Classes\Male;
use App\Classes\Meals;
use App\Http\Controllers\Controller;
use App\Models\breakfast;
use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Meal;
use App\Models\Nutrition;
use App\Models\User;
use App\Models\WorkoutData;
use Illuminate\Http\Request;
use App\Trait\Functions_Of_Meals;

class StatusController extends Controller
{
    use Functions_Of_Meals;
    public function get_status()
    {
        session_start();
        if (!isset($_SESSION)) {
            return view('admin.dashboard.status')->with('error', 'The Email Or Password Is Incorrect !!!');
        }
        $data = User::with('WorkoutData')->find($_SESSION['id']);
        $nit_data = Nutrition::where('user_id', '=', $_SESSION['id'])->first();
        // return $nit_data;
        if ($data->WorkoutData->gender == 1) {
            $client = new Male();
        } else {
            $client = new Female();
        }
        $client->set_age($data->age);
        $client->set_height($data->WorkoutData->height);
        $client->set_weight($data->WorkoutData->weight);
        $client->set_activity($data->WorkoutData->activity_rate);
        $status = $client->status($client->get_weight(), $client->get_height(), $client->get_age(), $client->get_activity());
        switch ($nit_data->goal) {
            case 'Lose Fat':
                $mycal = $status['activity'] - 500;
                $macros = $client->LoseFat($mycal);
                break;

            case 'Build muscle':
                $mycal = $status['activity'] + 500;
                $macros = $client->BuildMuscle($mycal);
                break;

            default:
                $mycal = $status['activity'];
                $macros = $client->MaintainWeight($mycal);

                break;
        }
        // return $_SESSION['breakfast'] = $this->meal($nit_data->plan_meals, $macros, 1, new Lunch(), 'lunch');

        return $_SESSION['nut_system'] = [

            'meals' => [
                $this->meal($nit_data->plan_meals, $macros, 1, new breakfast(), 'breakfast'),
                $this->meal($nit_data->plan_meals, $macros, 1, new Lunch(), 'lunch'),
                $this->meal($nit_data->plan_meals, $macros, 1, new Dinner(), 'dinner')
            ],
            'macros' => $macros,
        ];


        return view('admin.dashboard.status', with([
            'data' => $data,
            'nit_data' => $nit_data,
            'status' => $status,
            'macros' => $macros,
            'mycal' => $mycal
        ]));
    }
}
