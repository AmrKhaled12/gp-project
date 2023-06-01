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
      $data=User::with('post')->get();
      $posts=array();
      foreach ($data as $value){
          $posts[]=$value->post;

      }


//      for($i=0;$i<count($data);$i++){
//          echo $data[$i]->name.":";
//          for($j=0;$j<count($posts[$i]);$j++){
//              echo $posts[$i][$j]->text." ";
//          }
//
//      }
//      return $posts;

      //return($data->);


      return view('admin.Dashboard.Timeline.Timeline',with([
          'data'=>$data,
          'posts'=>$posts
      ]));

  }
}
