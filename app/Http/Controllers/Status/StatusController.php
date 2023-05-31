<?php

namespace App\Http\Controllers\Status;


use App\Http\Controllers\Controller;
use App\Models\Exercise;

class StatusController extends Controller
{
    public function get_status()
    {

        $client = $_SESSION['client'];
        return view('admin.Dashboard.Status.status', with(['client' => $client]));
    }
}
