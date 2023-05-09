<?php

namespace App\Http\Controllers\api;

use App\Classes\PrepareNutrition\Nutrition as ClassesNutrition;
use App\Classes\System\NutritionSystem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiNutritionController extends Controller
{

    public function apiBuildNitritionSystem()
    {
        session_start();
        if(!isset($_COOKIE['token'])){
            return response('error');
        }
        $client=($_SESSION['client']);
        $nutrition_system = new NutritionSystem(new ClassesNutrition(), $client);
        return $nutrition_system->Build();
    }
}
