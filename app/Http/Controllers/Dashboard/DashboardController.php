<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function login(Request $req){
    //   if (Auth::attempt([
    //         'email'=>$req->input('email'),
    //         'password'=>$req->input('password')
    //     ]))
    //     {
    //         return redirect()->route('dashboard');
    //     }

    //     else{
    //      return 'error';
    //     }
    // }

    // public function logout(){
    //     Auth::logout();
    //     return redirect()->route('start');
    // }

    public function show_dashboard()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
          return  view('admin.auth.login');
        }
        $_SESSION['home']='on';
        return view('admin.dashboard.admin');
    }
}
