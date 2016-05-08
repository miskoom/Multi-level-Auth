<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Redirect;

use App\PendingList;
use App\VerdictList;
use App\User;

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
            return Redirect::to('/admin')->withErrors("Please select at least an employee to approve or disapprove");
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
        
        
        $authorizedPersons = User::where('access_role', 'user')->get();
        $totalAuthorizedPersons = count($authorizedPersons);
        for($i = 0; $i < count($selected); $i++){
            if (!$request->has('approve')) continue;
            $employeeVerdicts = VerdictList::with('pending_lists')->with('user')->where('pending_lists_id', $selected[$i])->get();
            $targetEmployee = PendingList::find($selected[$i]);
            $confirmCounter = 0;
            foreach($authorizedPersons as $authorizedPerson){
                foreach($employeeVerdicts as $employeeVerdict){
                    if($employeeVerdict->status == 1 && $employeeVerdict->user->id == $authorizedPerson->id){
                        $confirmCounter++;
                    }
                }
            }
            if($confirmCounter == $totalAuthorizedPersons/* || $confirmCounter == 3*/){
                $targetEmployee->status = 1;
                $targetEmployee->save();
            }
        }
        
        
        
        return Redirect::to('/admin');
    }
    
    public function getGodPage(){
        if(Auth::user()->access_role != "god"){
            return Redirect::to('/login');
        }
        $lists = PendingList::with('user')->where('user_id', Auth::user()->id)->get();
        return view('god_index', ['lists' => $lists]);
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
    
    
    public function getEmployee($id){
        
        if(Auth::user()->access_role != "god"){
            return Redirect::to('/login');
        }
        
        $employeeVerdicts = VerdictList::with('pending_lists')->with('user')->where('pending_lists_id', $id)->get();
        $targetEmployee = PendingList::find($id);
        $authorizedPersons = User::where('access_role', 'user')->get();
        $totalAuthorizedPersons = count($authorizedPersons);
        $confirmCounter = 0;
        foreach($authorizedPersons as $authorizedPerson){
            foreach($employeeVerdicts as $employeeVerdict){
                if($employeeVerdict->status == 1 && $employeeVerdict->user->id == $authorizedPerson->id){
                    $confirmCounter++;
                }
            }
        }
        $showConfirm = false;
        if($confirmCounter == $totalAuthorizedPersons/* || $confirmCounter == 3*/){
            $showConfirm = true;
        }
        return view('show_employee', ['employee' => $employeeVerdicts, 
        'targetEmployee' => $targetEmployee, 'showConfirm' => $showConfirm]);
    }
    
    public function sendConfirm(Request $request, $id){
        
        if(Auth::user()->access_role != "god" || 
            Auth::user()->access_role != "supergod"){
            return Redirect::to('/login');
        }
        $targetEmployee = PendingList::find($id);
        if($targetEmployee){
            $targetEmployee->status = 1;
            $targetEmployee->save();
            return Redirect::to('/dashboard/employee/' . $id);
        }else{
            return Redirect::to('/dashboard/employee/' . $id);
        }
    }
    
    public function getPayroll(Request $request){
        
        if(Auth::user()->access_role != "supergod"){
            return Redirect::to('/login');
        }
        
        $pendingLists = PendingList::where('status', 1)->get();
        return view('payroll_index', ['pendingLists' => $pendingLists]);
    }
    
    public function getSuperGodPage(){
        if(Auth::user()->access_role != "supergod"){
            return Redirect::to('/login');
        }
        $lists = PendingList::with('user')->get();
        return view('super_god_index', ['lists' => $lists]);
    }
    
    public function superGetEmployee($id){
        
        if(Auth::user()->access_role != "supergod"){
            return Redirect::to('/login');
        }
        
        $employeeVerdicts = VerdictList::with('pending_lists')->with('user')->where('pending_lists_id', $id)->get();
        $targetEmployee = PendingList::find($id);
        $authorizedPersons = User::where('access_role', 'user')->get();
        $totalAuthorizedPersons = count($authorizedPersons);
        $confirmCounter = 0;
        foreach($authorizedPersons as $authorizedPerson){
            foreach($employeeVerdicts as $employeeVerdict){
                if($employeeVerdict->status == 1 && $employeeVerdict->user->id == $authorizedPerson->id){
                    $confirmCounter++;
                }
            }
        }
        $showConfirm = false;
        if($confirmCounter == $totalAuthorizedPersons/* || $confirmCounter == 3*/){
            $showConfirm = true;
        }
        return view('super_show_employee', ['employee' => $employeeVerdicts, 
        'targetEmployee' => $targetEmployee, 'showConfirm' => $showConfirm]);
    }
    
    public function superAddEmployee(Request $request){
        if(Auth::user()->access_role != "supergod"){
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
        return Redirect::to('/super_dashboard');
    }
}
