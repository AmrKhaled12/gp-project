<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use App\Trait\GetData_UserProfileFollow;

class DashboardController extends Controller
{

  public function show_dashboard()
  {
//    session_start();
    $_SESSION['home'] = 'on';
    $posts  = Post::with('user')->get();
    $isFound=true;
    return view('admin.Dashboard.Timeline.Timeline', with([
        'posts'=>$posts,
        'found'=>$isFound,
        'client'=>$_SESSION['client'],
    ]));
  }
}
