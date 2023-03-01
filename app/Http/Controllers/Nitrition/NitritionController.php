<?php

namespace App\Http\Controllers\Nitrition;

use App\Http\Controllers\Controller;
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

    public function insert_nut_data(Request $req){
        $arr=$req->input('allergy');
        $allergy=implode('-',$arr);
        Nutrition::create([
            'nutrition_system'=>$req->input('food'),
            'goal'=>$req->input('goal'),
            'allergy'=>$allergy,
            'plan_meals'=>$req->plan_meals,
            'user_id'=>$req->input('id_of_user'),
        ]);
        return redirect()->route('dashboard');

    }
    public function show_breakfast(){
        session_start();
    return   [$_SESSION['nut_system']['meals'],
        $this->snaks($_SESSION['nut_system']['meals'],$_SESSION['nut_system']['macros'],1)];


    }

}
