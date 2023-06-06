<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
use App\Trait\GetData_UserProfileFollow;

class DashboardController extends Controller
{
  use GetData_UserProfileFollow;
  public function show_dashboard()
  {

    $_SESSION['home'] = 'on';
    $posts  = Post::with('user')->get();
    return view('admin.Dashboard.Timeline.Timeline', compact('posts'));
  }

  public function show_profile($main_id)
  {
    $data = $this->get_information_user($main_id);
    return view('admin.Profile.userProfile', compact('data'));
  }
}
