<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Trait\TestApi;
use Illuminate\Http\Request;

class TestApiController extends Controller
{
    use TestApi;
    public function index(){
        $user=User::get();
        return $this->ReturnRespone($user,200,'ok');
    }
}
