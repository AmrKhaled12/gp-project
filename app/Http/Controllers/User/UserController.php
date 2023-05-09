<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\User;

class UserController extends Controller
{
    public function email_register_show()
    {
        return view('admin.auth.email_register');
    }

    public function insert_email_data(EmailRequest $req)
    {
        $password=bcrypt($req->password);
        User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => $password,
            'phone' => $req->input('phone'),
            'age' => $req->input('age')
        ]);

        $id = User::where('email', '=', $req->email)->first()->id;

        return redirect()->route('workout_register', compact('id'));
    }
}
