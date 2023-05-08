<?php

namespace App\Http\Controllers\Nitrition;

use App\Classes\PrepareNutrition\Nutrition as ClassesNutrition;
use App\Classes\System\NutritionSystem;
use App\Http\Controllers\Controller;
use App\Models\Nutrition;
use App\Trait\Functions_Of_Meals;
use Illuminate\Http\Request;

class NitritionController extends Controller
{
    use Functions_Of_Meals;

    public function nut_register_show($id)
    {
        return view('admin.auth.nut', compact('id'));
    }

    public function insert_nut_data(Request $req)
    {
        $arr = $req->input('allergy');
        $allergy = implode('-', $arr);

        Nutrition::create([
            'nutrition_system' => $req->input('food'),
            'goal' => $req->input('goal'),
            'allergy' => $allergy,
            'plan_meals' => $req->plan_meals,
            'user_id' => $req->input('id_of_user'),
        ]);

        return redirect()->route('dashboard');
    }

    public function show_breakfast()
    {
        $client = $_SESSION['client'];
        $nutrition_system = new NutritionSystem(new ClassesNutrition(), $client);
        return $nutrition_system->Build();
    }
}
