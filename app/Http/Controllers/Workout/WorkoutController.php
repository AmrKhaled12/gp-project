<?php

namespace App\Http\Controllers\Workout;

use App\Classes\System\WorkoutSystem;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\WorkoutData;
use Illuminate\Http\Request;


class WorkoutController extends Controller
{

    public function workout_register_show($id)
    {
        return view('admin.auth.workout_register', compact('id'));
    }

    public function insert_workout_data(Request $req)
    {
        $id = $req->id_of_user;

        if ($req->input('gender') == 'male') {
            $gender = 1;
        } else {
            $gender = 0;
        }
        WorkoutData::create([
            'height' => $req->height,
            'weight' => $req->weight,
            'gender' => $gender,
            'activity_rate' => $req->activity,
            'exercise_level' => $req->exercise_level,
            'workout_place' => $req->workout_place,
            'workout_days' => $req->workout_days,
            'workout_tools' => $req->workout_tools,
            'number_of_Days' => $req->number_of_days,
            'body_fat' => $req->bodyfat,
            'user_id' => $id
        ]);

        return redirect()->route('nut_register', compact('id'));
    }
    public function plan_workout()
    {
        // $video = Video::find(3);
        // return view('admin.dashboard.workout', with(['video' => $video->video]));
        // return response()->json(($_SESSION['client']));
        $workout_system = new WorkoutSystem($_SESSION['client']);
        return $workout_system->Build();
    }
}
