<?php

namespace App\Http\Controllers\Workout;

use App\Classes\Female;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WorkoutData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class WorkoutController extends Controller
{

    public function workout_register_show($id)
    {
        return view('admin.auth.workout_register', compact('id'));
    }

    public function insert_workout_data(Request $req)
    {
       $id= $req->input('id_of_user');
        if ($req->input('gender') == 'male') {
            $gender = 1;
        } else {
            $gender = 0;
        }
        WorkoutData::create([
            'height' => $req->height,
            'weight' => $req->input('weight'),
            'gender' => $gender,
            'activity_rate' => $req->input('activity'),
            'exercise_level' => $req->input('exercise_level'),
            'body_fat' => $req->input('bodyfat'),
            'user_id' => $id
        ]);
        return redirect()->route('nut_register',compact('id'));

    }
}
