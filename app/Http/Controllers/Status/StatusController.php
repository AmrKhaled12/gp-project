<?php

namespace App\Http\Controllers\Status;

use App\Classes\client;
use App\Classes\Female;
use App\Classes\Male;
use App\Classes\Meals;
use App\Http\Controllers\Controller;
use App\Models\breakfast;
use App\Models\Dinner;
use App\Models\Lunch;
use App\Models\Meal;
use App\Models\Nutrition;
use App\Models\User;
use App\Models\WorkoutData;
use Illuminate\Http\Request;
use App\Trait\Functions_Of_Meals;

class StatusController extends Controller
{
    public function get_status()
    {
        $client = $_SESSION['client'];
        return view('admin.dashboard.status', with(['client' => $client]));
    }
}
