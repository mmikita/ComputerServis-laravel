<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repair;
use App\Employee;
use App\Http\Middleware\Admin;
use App\Http\Requests;




class AdminRepairsController extends Controller
{

    public function __construct()
    {
        $this->middleware([Admin::class, 'auth']);
    }

    
    public function showRepairsList()
    {
        // $repairs = Repair::all()->paginate(10);
        $repairs = Repair::paginate(20);
        //$repairs->load('employees');  
        return view('repairsList') -> with('repairs', $repairs);
    }


    public function addRepairViaCustomerForm()
    {    
       $repair = Repair::create(request(['descriptionOfTheFault', 'computerModel', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail']));
       \Session::flash('flash_message', 'twoja wiadomość została wysłana, niedługo się z Tobą skontaktujemy');
       return view('home');

   }



   public function awaitingRepairs()
   {
    $employees = Employee::all();
    $repairs = Repair::where('status', 'oczekujące na zatwierdzenie')->paginate(20);
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);

}

public function awaitingForEmpRepairs()
{
    $repairs = Repair::whereRaw('status = "oczekujace na przydział pracownika"')->paginate(20);
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);

}

public function updateRepairStatus(Request $request)
{

    $id = $request->input('id');
    $newStatus = $request->input('status');
    $repair = Repair::where('id', $id)->first();
    $repair->status = $newStatus;
    $repair->save();
    return back();
}

public function updateRepairEmployee(Request $request)
{
    $RepairId = $request->input('id');
    $NewEmpId = $request->input('empId');
    $repair = Repair::where('id', $RepairId)->first();
    $NewEmp = Employee::where('id', $NewEmpId)->first();
    $repair-> employee_id = $NewEmp->id;
    $repair->save();
    return back();
}

public function updateRepairGET(Request $request){
    $id = $request->input('id');
    $repair = Repair::where('id', $id)->first();
    $employees = Employee::all();
    return view('editRepair')->with('repair', $repair)-> with('employees', $employees);
}
public function updateRepairPOST(Request $request){

    $id = $request->input('id');
    $repair = Repair::where('id', $id)->first();
    $input = $request->all();
    $repair ->fill($input);
    $repair -> save();
    return  back();

}

public function deleteRepair(Request $request){

    $id = $request->input('id');
    $repair = Repair::where('id', $id)->first();
    $repair->delete();
    return back();

}


public function addRepairGET(){
    $employees = Employee::all();

    return view('addRepair')-> with('employees', $employees);
}

public function addRepairPOST()
{    
   $repair = Repair::create(request(['descriptionOfTheFault', 'computerModel', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail', 'employee_id', 'comment']));
   return back();

}


public function showAllRepairs()
{    
    $repairs = Repair::paginate(20);
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}
public function showCurrentRepairs()
{    
    $repairs = Repair::where('status', 'w trakcie naprawy')->paginate(20);   
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}
public function showCompletedRepairs()
{    
    $repairs = Repair::where('status', 'w trakcie naprawy')->paginate(20);   
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}
public function showRejectedRepairs()
{    
    $repairs = Repair::where('status', 'odrzucone')->paginate(20);   
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}
public function showProblematicRepairs()
{    
    $repairs = Repair::where('status', 'nieoczekiwany problem podczas naprawy')->paginate(20);   
    $employees = Employee::all();
    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}


public function searchRepair(Request $request)
{   
    $s = $request->input('searchInfo');
    $employees = Employee::all();
    $repairs = Repair::join('employees', 'employees.id', '=', 'repairs.employee_id')
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
    ->paginate(20);

    return view('repairsList') -> with('repairs', $repairs)-> with('employees', $employees);
}


}
