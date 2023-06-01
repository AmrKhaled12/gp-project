<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function showCreatePost(){
        return view('admin.dashboard.Timeline.assets-timeline.showCreatePost');
    }
    public function storePost(Request $request){

        $client = $_SESSION['client'];
        $request->validate([
            'text' => 'max:255',
            'media' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,gif',
        ]);
        $file_extention=$request->media->getClientOriginalExtension();
        $file_name=time().".".$file_extention;
        if($file_extention=='mp4'||'mov'||'ogg'){
            $path='videos/Post-Video';
        }
        else{

            $path='images/Post_Images';

        }
        $request->media->move($path,$file_name);

//        if($validator->fails()){
//            return response()->json($validator->errors()->toJson());
//        }
        Post::create([

          'text'=>$request->text,
          'media'=>$file_name,
            'user_id'=>$client->id
        ]);
        return response('post created');
    }
}
