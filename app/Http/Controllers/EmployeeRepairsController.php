<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repair;
use App\Employee;
use App\Http\Middleware\Emp;
use App\Http\Requests;

class EmployeeRepairsController extends Controller
{
   public function __construct()
   {
    $this->middleware([Emp::class, 'auth']);
}

public function takeRepair(Request $request)
{   
   $repairId = $request->input('id'); 
   $myId = \Auth::user()->id;
   $repair = Repair::where('id', $repairId)->first();
   $repair -> employee_id =$myId;
   $repair -> status ='w trakcie naprawy';
   $repair-> save();

   return back();
}

public function rejectRepair(Request $request)
{   
   $repairId = $request->input('id'); 
   $repair = Repair::where('id', $repairId)->first();
   $repair -> status ='odrzucone';
   $repair-> save();
   return back();
}

public function finishRepair(Request $request)
{   
   $repairId = $request->input('id'); 
   $repair = Repair::where('id', $repairId)->first();
   $repair -> status ='zakonczone';
   $repair-> save();

   return back();
}
public function showMyRepairs()
{    $id = \Auth::user()->id;
    $repairs = Repair::where('employee_id', $id)->where('status', 'w trakcie naprawy')-> paginate(20);
    return view('myRepairs') -> with('repairs', $repairs);
}
public function showMyAllRepairs()
{    $id = \Auth::user()->id;
    $repairs = Repair::where('employee_id', $id)-> paginate(20);
    return view('myRepairs') -> with('repairs', $repairs);
}
public function allRepairs()  
{   
 $repairs = Repair::paginate(20);
 $employees = Employee::all();
 return view('allRepairsEmp') -> with('repairs', $repairs)-> with('employees', $employees);
}

public function awaitingRepairs()
{
	$repairs = Repair::where('status', 'oczekujące na zatwierdzenie')->orWhere('status', 'oczekujace na przydział pracownika')->paginate(20);
    return view('repairsListforEmp') -> with('repairs', $repairs);	
}

public function updateRepairGET(Request $request)

{    
    $myId = \Auth::user()->id;
    $id = $request->input('id');
    $repair = Repair::where('id', $id)->first();
    if($repair -> employee_id !== $myId)
    {
     return redirect('');

 }
 return view('editRepairEmp')->with('repair', $repair);
}


public function updateRepairPOST(Request $request){

    $id = $request->input('id');
    $repair = Repair::where('id', $id)->first();
    $input = $request->all();
    $repair ->fill($input);
    $repair -> save();
    return  back();

}
public function searchRepair(Request $request)
{   
   $employees = Employee::all();

   $s = $request->input('searchInfo');
   $repairs = Repair::join('employees', 'employees.id', '=', 'repairs.employee_id')
   ->select('employees.*', 'repairs.*')
   ->where('customerFirstName', 'LIKE', '%' . $s . '%')
   ->orWhere('customerLastName', 'LIKE', '%' . $s . '%')
   ->orWhere('customerEmail', 'LIKE', '%' . $s . '%')
   ->orWhere('customerPhoneNumber', 'LIKE', '%' . $s . '%')
   ->orWhere('computerModel', 'LIKE', '%' . $s . '%')
   ->orWhere('comment', 'LIKE', '%' . $s . '%')
   ->orWhere('descriptionOfTheFault', 'LIKE', '%' . $s . '%')
   ->orWhere('descriptionOfTheFault', 'LIKE', '%' . $s . '%')
   ->orWhere('employees.firstName', 'LIKE', '%' . $s . '%')
   ->orWhere('employees.lastName', 'LIKE', '%' . $s . '%')
   ->orWhere('employees.role', 'LIKE', '%' . $s . '%')
   ->orWhere('employees.email', 'LIKE', '%' . $s . '%')
   ->orderBy('repairs.id', 'asc')
   ->paginate(20);

   return view('allRepairsEmp') -> with('repairs', $repairs)-> with('employees', $employees);
}

public function changeRepairStatus(Request $request)
{

    $id = $request->input('id');
    $newStatus = $request->input('status');
    $repair = Repair::where('id', $id)->first();
    $repair->status = $newStatus;
    $repair->save();
    return back();
}

public function addRepairGET(){
    $employees = Employee::all();
    return view('addRepairEmp')-> with('employees', $employees);
}

public function addRepairPOST()
{    
$repair = Repair::create(request(['descriptionOfTheFault', 'computerModel', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail', 'comment', 'status']));
 $myId = \Auth::user()->id;
 $repair -> employee_id = $myId; 
 $repair->save();
 return back();

}





}
