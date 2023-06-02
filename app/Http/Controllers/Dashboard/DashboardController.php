<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
  public function show_dashboard()
  {

    $_SESSION['home'] = 'on';
    $posts  = Post::with('user')->get();
    return view('admin.Dashboard.Timeline.Timeline', compact('posts'));
  }
}
