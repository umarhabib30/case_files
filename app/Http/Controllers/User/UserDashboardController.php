<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function index()
    {
        $data=[
            'title'=> 'Dashboard',
            'active'=>'Dashboard',
            'breadcrumbs' => array("user/dashboard" => "Dashboard"),
        ];
        return view('user.dashboard.index',$data);
    }

   

}
