<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Redirect;

use App\PendingList;
use App\VerdictList;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function sendVerdict(Request $request){
        $selected = array();
        $selected = $request->get('selected');
        if ($request->has('approve')) {
            die("has approved");
        }else if($request->has('disapprove')){
            
        }else{
            return Redirect::to('/admin')->withErrors("Invalid Action");
        }
        // die(var_dump($request->get('selected')));
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
        
        $pendingLists = PendingList::where('status', 0)->get();
        $myVerictLists = VerdictList::where('user_id', Auth::user()->id)->get();
        return view('adminhome', ['pendingLists' => $pendingLists]);
    }
}
