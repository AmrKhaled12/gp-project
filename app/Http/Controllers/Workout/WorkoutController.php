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
        if ($req->input('gender') == 'male') {
            $gender = 1;
        } else {
            $gender = 0;
        }
        WorkoutData::create([
            'height' => $req->input('height'),
            'weight' => $req->input('weight'),
            'gender' => $gender,
            'activity rate	' => $req->input('activity'),
            'exercise level' => $req->input('exercise level'),
            'body fat' => $req->input('bodyfat'),
            'user_id' => $req->input('id_of_user')

        ]);
        return response('done');

    }
}
