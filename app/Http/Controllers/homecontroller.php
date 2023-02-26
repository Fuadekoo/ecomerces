<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class homecontroller extends Controller
{
    //
    public function index(){
        return view('home.userpage');
    }
    public function redirect(){
        $usertype=Auth::User()->usertype;
        if($usertype=="1")
        {
            return view('admin.admin');
        }
        else{
            return view('home.userpage');
        }
    }
}
