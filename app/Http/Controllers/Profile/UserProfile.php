<?php

namespace App\Http\Controllers\Profile;

use App\Models\Follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trait\CheckSession;

class UserProfile extends Controller
{
    use CheckSession;
private 
    public function show_profile($main_id)
  {
    $data = $this->get_information_user($main_id);
    $posts = Post::where('user_id', '=', $main_id)->get();
    return view('admin.Profile.userProfile', compact('data', 'posts'));
  }

    public function add_follow()
    {
        Follow::create([
            'following' => $this->get_session()->id,
'follower'=>
        ]);
    }
}
