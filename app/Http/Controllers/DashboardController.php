<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Redirect;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getGodPage(){
        if(Auth::user()->access_role == "user"){
            return Redirect::to('/admin');
        }
        return view('godhome');
    }
    public function getAdminPage(){
        if(Auth::user()->access_role == "god"){
            return Redirect::to('/dashboard');
        }
        return view('adminhome');
    }
}
