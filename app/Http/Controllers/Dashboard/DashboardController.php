<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
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
