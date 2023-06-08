<?php

namespace App\Http\Controllers\Workout;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\System\WorkoutSystem;
use App\Trait\GetNotification;
use Illuminate\Support\Facades\Session;

class WorkoutController extends Controller
{
    use GetNotification;
    public function workout_register_show()
    {
        return view('admin.Registration.Workout-Register');
    }

    public function insert_workout_data(Request $req)
    {

        Session::put('data_workout', [
            'height' => $req->height,
            'weight' =>  $req->weight,
            'gender' =>   $req->gender,
            'activity_rate' =>   $req->activity,
            'exercise_level' =>    $req->exercise_level,
            'bodyfat' => $req->bodyfat,
        ]);
        return view('admin.Registration.Nutrition-Register');
    }
    public function Plan_Workout()
    {
        session_start();
        $workout_system = new WorkoutSystem($_SESSION['client']);
        return $workout_system->Build();
    }
}
