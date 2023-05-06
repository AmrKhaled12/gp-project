<?php

namespace App\Http\Controllers\HomePage;

use App\Classes\client;
use App\Trait\GetData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class HomePageController extends Controller
{
    use GetData;
    public function get_login(){
        session_start();
        if(isset($_SESSION['home']))
        {

            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');

    }

    public function post_login(LoginRequest $request)
    {

        $is_login=User::where(['email'=>$request->email,'password'=>$request->password])->first();
        if(collect($is_login)->isEmpty())
        {
            return view('admin.auth.login')->with('error','The Email Or Password Is Incorrect !!!');
        }
        else {
            session_start();
            $_SESSION['login'] = 'on';
            $data= GetData::data_of_workout_and_nutrition($is_login->id);
            $client = new client();
            $client->setData($data);
            $client->calc_status();
            $client->calc_mycal();
            $_SESSION['client']=$client;
            return redirect()->route('dashboard');
        }
    }
    public function logout()
    {
      session_start();
      session_unset();
      session_destroy();
      return view('admin.auth.login');
    }
}
