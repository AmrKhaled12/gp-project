<?php

namespace App\Http\Controllers\Status;

use App\Classes\Female;
use App\Classes\Male;
use App\Http\Controllers\Controller;
use App\Models\Nutrition;
use App\Models\User;
use App\Models\WorkoutData;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function get_status(){
        session_start();
        if(!isset($_SESSION)){
             return view('admin.dashboard.status')->with('error','The Email Or Password Is Incorrect !!!');
        }
        $data=WorkoutData::with('users')->find($_SESSION['id']);
        $nit_data=Nutrition::where('user_id','=',$_SESSION['id'])->get();
        if($data->gender==1) {
            $client = new Male();

        }else{
            $client = new Female();

        }
        $client->set_age($data->users->age);
        $client->set_height($data->height);
        $client->set_weight($data->weight);
        $client->set_activity($data->activity_rate);
        $status = $client->status($client->get_weight(), $client->get_height(), $client->get_age(), $client->get_activity());
        foreach ($nit_data as $val) {
            switch ($val->goal) {
                case 'Lose Fat':
                    $macros = $client->LoseFat($status['activity']);
                    break;

                case 'Build muscle':
                    $macros = $client->BuildMuscle($status['activity']);
                    break;

                default :
                    $macros = $client->MaintainWeight($status['activity']);
                    break;


            }
        }

        return view('admin.dashboard.status', with(['data' => $data, 'nit_data' => $nit_data, 'status' => $status, 'macros'=>$macros]));
    }
}
