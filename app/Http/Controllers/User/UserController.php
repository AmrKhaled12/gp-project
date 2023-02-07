<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function email_register_show(){
        return view('admin.auth.email_register');
    }

    public function insert_email_data(Request $req){

        User::create([
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'password'=>$req->input('password'),
            'phone'=>$req->input('phone'),
            'age'=>$req->input('age')
        ]);



        return redirect()->route('workout_register');


    }



}
