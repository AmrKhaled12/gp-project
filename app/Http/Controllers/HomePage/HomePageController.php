<?php

namespace App\Http\Controllers\HomePage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class HomePageController extends Controller
{
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
        session_start();
        $is_login=User::where(['email'=>$request->email,'password'=>$request->password])->first();
        if(collect($is_login)->isEmpty())
        {
            return view('admin.auth.login')->with('error','The Email Or Password Is Incorrect !!!');
        }
        $_SESSION['login']='on';
        $_SESSION['name']=$is_login->name;
        $_SESSION['photo']=$is_login->photo;
       return redirect()->route('dashboard');
    }
    public function logout()
    {
      session_start();
      session_unset();
      session_destroy();
      return view('admin.auth.login');
    }
}
