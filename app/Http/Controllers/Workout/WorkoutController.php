<?php

namespace App\Http\Controllers\Workout;

use App\Models\Video;
use App\Models\Nutrition;
use App\Models\WorkoutData;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Events\PushNotification;
use App\Http\Controllers\Controller;
use App\Classes\System\WorkoutSystem;
use App\Models\User;
use App\Trait\GetNotification;

class WorkoutController extends Controller
{
    use GetNotification;
    public function workout_register_show($id)
    {
        return view('admin.Registration.Workout-Register', compact('id'));
    }

    public function insert_workout_data(Request $req)
    {
        $id = $req->input('id_of_user');

        if ($req->input('gender') == 'male') {
            $gender = 1;
        } else {
            $gender = 0;
        }
        WorkoutData::create([
            'height' => $req->input('height'),
            'weight' => $req->input('weight'),
            'gender' => $gender,
            'activity_rate' => $req->input('activity'),
            'exercise_level' => $req->input('exercise_level'),
            //            'workout_place' => $req->workout_place,
            //            'workout_days' => $req->workout_days,
            //            'workout_tools' => $req->workout_tools,
            //            'number_of_Days' => $req->number_of_days,
            'body_fat' => $req->input('bodyfat'),
            'user_id' => $id
        ]);

        return view('admin.Registration.Nutrition-Register', compact('id'));
    }
    public function plan_workout()
    {
        // $video = Video::find(3);
        // return view('admin.dashboard.workout', with(['video' => $video->video]));
        // return response()->json(($_SESSION['client']));
        session_start();
        $workout_system = new WorkoutSystem($_SESSION['client']);
        return $workout_system->Build();
    }
}
