<?php

namespace App\Http\Controllers\HomePage;

use App\Classes\client;
use App\Classes\System\GenerateClient;
use App\Trait\GetData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    use GetData;
    public function get_login()
    {

        return view('admin.auth.login');
    }

    public function post_login(LoginRequest $request)
    {
        $user = User::where(['email' => $request->email, 'password' => $request->password])->first();
        if (collect($user)->isEmpty()) {
            return view('admin.auth.login')->with('error', 'The Email Or Password Is Incorrect !!!');
        } else {

            $_SESSION['login'] = 'on';
            $client = new GenerateClient(new client, $user->id);
            $client->Generate();
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
