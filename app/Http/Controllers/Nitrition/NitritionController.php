<?php

namespace App\Http\Controllers\Nitrition;

use App\Models\User;
use App\Models\Nutrition;
use App\Models\WorkoutData;
use Illuminate\Http\Request;
use App\Trait\Functions_Of_Meals;
use App\Http\Controllers\Controller;
use App\Classes\System\NutritionSystem;
use Illuminate\Support\Facades\Session;
use App\Classes\PrepareNutrition\Nutrition as ClassesNutrition;

class NitritionController extends Controller
{
    use Functions_Of_Meals;

    public function nut_register_show()
    {
        return view('admin.Registration.Nutrition-Register');
    }
    public function full_registration(Request $req)
    {
        $id = $this->insert_user_data();
        $this->insert_workout_data($id);
        $this->insert_nut_data($req, $id);
        return redirect()->route('get_login');
    }

    public function insert_nut_data($req, $id)
    {


        $arr = $req->input('allergy');
        $allergy = implode('-', $arr);

        Nutrition::create([
            'nutrition_system' => $req->input('food'),
            'goal' => $req->input('goal'),
            'allergy' => $allergy,
            'plan_meals' => '3 Meals - 1 Snacks',
            'user_id' => $id,
        ]);
    }



    public function insert_user_data()
    {
        $data_user = Session::get('data_user');
        $defultImage='21372076.jpg';
       $password = encrypt($data_user['password']);
        $new_user = User::create([
            'name' => $data_user['name'],
            'email' => $data_user['email'],
            'password' => $password,
            'phone' => $data_user['phone'],
            'age' => $data_user['age'],
            'photo' => $defultImage
        ]);
        return $new_user->id;
    }

    public function insert_workout_data($id)
    {
        $data_workout = Session::get('data_workout');

        if ($data_workout['gender'] == 'male') {
            $gender = 1;
        } else {
            $gender = 0;
        }

        WorkoutData::create([
            'height' => $data_workout['height'],
            'weight' => $data_workout['weight'],
            'gender' => $gender,
            'activity_rate' => $data_workout['activity_rate'],
            'exercise_level' => $data_workout['exercise_level'],
            //            'workout_place' => $req->workout_place,
            //            'workout_days' => $req->workout_days,
            //            'workout_tools' => $req->workout_tools,
            //            'number_of_Days' => $req->number_of_days,
            'body_fat' => $data_workout['bodyfat'],
            'user_id' => $id
        ]);
    }
    public function Plan_Nutrition()
    {

        $client = $_SESSION['client'];
        $nutrition_system = new NutritionSystem(new ClassesNutrition(), $client);
        $nutrition_system->Build();
        return view('admin.Nutrition.nutrition', compact('client'));
    }
}
