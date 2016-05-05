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
        
        if(Auth::user()->access_role != "user"){
            return Redirect::to('/login');
        }
        
        if(!$request->has('approve') && !$request->has('disapprove')){
            return Redirect::to('/admin')->withErrors("Invalid Action");
        }
        
        $selected = array();
        $selected = $request->get('selected');
        
        if(count($selected) == 0){
            return Redirect::to('/admin')->withErrors("Please select at least an employee, to approve or disapprove");
        }
        
        for($i = 0; $i < count($selected); $i++){
            $verdict = new VerdictList;
            if ($request->has('approve')) {
                $verdict->status = 1;
            }else{
                $verdict->status = 0;
            }
            $verdict->comment = $request->input('comment');
            $verdict->pending_lists()->associate(PendingList::find($selected[$i]));
            $verdict->user()->associate(Auth::user());
            $verdict->save();
        }
        
        return Redirect::to('/admin');
    }
    
    public function getGodPage(){
        return $this->getEmployeeStatus();
    }
    
    public function getAdminPage(){
        if(Auth::user()->access_role == "god"){
            return Redirect::to('/dashboard');
        }
        
        $pendingLists = PendingList::where('status', 0)->get();
        $myVerictLists = VerdictList::where('user_id', Auth::user()->id)->where('enabled', 1)->get();
        foreach($pendingLists as $key => $pendingList){
            foreach($myVerictLists as $myVerdictList){
                if($myVerdictList->pending_lists_id == $pendingList->id){
                    unset($pendingLists[$key]);
                    break;
                }
            }
        }
        return view('adminhome', ['pendingLists' => $pendingLists]);
    }
    
    public function getAddEmployee(){
        if(Auth::user()->access_role == "user"){
            return Redirect::to('/admin');
        }
        return view('add_employee');
    }
    
    public function addEmployee(Request $request){
        if(Auth::user()->access_role != "god"){
            return Redirect::to('/login');
        }
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'service_no' => 'required',
            'department' => 'required',
            'employment_date' => 'required',
        ]);
        
        //the validate method ensures we don't get here on failure
        
        $pendingList = new PendingList;
        $pendingList->first_name = $request->input('first_name');
        $pendingList->middle_name = $request->input('middle_name');
        $pendingList->last_name = $request->input('last_name');
        $pendingList->service_no = $request->input('service_no');
        $pendingList->department = $request->input('department');
        $pendingList->employment_date = $request->input('employment_date');
        $pendingList->user()->associate(Auth::user());
        $pendingList->save();
        return Redirect::to('/dashboard');
    }
    
    public function getEmployeeStatus(){
        if(Auth::user()->access_role != "god"){
            return Redirect::to('/login');
        }
        $lists = PendingList::with('user')->get();
        return view('god_index', ['lists' => $lists]);
    }
    
    public function getEmployee($id){
        $employee = VerdictList::with('pending_lists')->with('user')->where('pending_lists_id', $id)->get();
        $targetEmployee = PendingList::find($id);
        return view('show_employee', ['employee' => $employee, 'targetEmployee' => $targetEmployee]);
    }
}
