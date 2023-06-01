<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Trait\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    use Media;
    public function showCreatePost(){
        return view('admin.dashboard.Timeline.assets-timeline.showCreatePost');
    }
    public function storePost(Request $request){

        $client = $_SESSION['client'];
        $request->validate([
            'text' => 'max:255',
            'media' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,gif',
        ]);
        $file_name=$this->getFileName($request->media);
        Post::create([

          'text'=>$request->text,
          'media'=>$file_name,
            'user_id'=>$client->id
        ]);
        return response('post created');
    }
}
