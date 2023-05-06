<?php

namespace App\Http\Controllers\Nitrition;

use App\Http\Controllers\Controller;
use App\Models\breakfast;
use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Nutrition;
use App\Trait\Functions_Of_Meals;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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
        session_start();
        $nut = new \App\Classes\Nutrition();
        $client = $_SESSION['client'];
        return var_dump($client);
//        $macros=[
//            'protein'=>$client->protein,
//            'carbs'=>$client->carbs,
//            'fats'=>$client->fats];
//        $meals = [
//            $nut->meal( $macros, 1, new breakfast(), 'breakfast'),
//            $nut->meal( $macros, 1, new Lunch(), 'lunch'),
//            $nut->meal( $macros, 2, new Dinner(), 'dinner'),
//
//        ];
//        $day_meals=[
//            $meals,
//            $nut->snaks($meals,$macros,1)
//        ];
//
//        return ($day_meals);
//    }

    }
}
