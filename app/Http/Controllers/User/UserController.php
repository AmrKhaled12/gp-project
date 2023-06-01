<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\User;

class UserController extends Controller
{
    public function email_register_show()
    {
        return view('admin.Registration.Email-Register');
    }

    public function insert_email_data(EmailRequest $req)
    {
        //        $password=bcrypt($req->password);
        User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => $req->password,
            'phone' => $req->input('phone'),
            'age' => $req->input('age')
        ]);

        $id = User::where('email', '=', $req->email)->first()->id;

        return view('admin.Registration.Workout-Register', compact('id'));
    }
}
