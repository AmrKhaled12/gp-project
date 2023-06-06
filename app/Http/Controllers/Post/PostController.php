<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
    public function getComments($id){
        $comments=Comment::with('user')->where('post_id','=',$id)->get();

        $posts=Post::where('id','=',$id)->get();

        return view('admin.Dashboard.Timeline.assets-timeline.Comment-page',with([
            'posts'=>$posts,
            'comments'=>$comments,

        ]));
    }

    public function storeComment(Request $request){
        session_start();
        Comment::create([
           'text'=>$request->text,
            'user_id'=>$_SESSION['client']->id,
            'post_id'=>1
        ]);
     return ('dashboard');
    }

    public function showSearch(){
        return view('admin.Dashboard.Timeline.assets-timeline.search-result');
    }
}
