<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function show_dashboard()
  {

    $_SESSION['home'] = 'on';

    return view('admin.Dashboard.Timeline.Timeline');
  }
}
