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
        return view('adminHome') -> with('repairs', $repairs)-> with('employees', $employees);
 
    }

     public function awaitingForEmpRepairs()
    {
        $repairs = Repair::whereRaw('status = "oczekujace na przydział pracownika"')->paginate(20);
        return view('awaitingRepairsForEmp') -> with('repairs', $repairs);
 
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
        echo $id;
        return view('editRepair')->with('id', $id);
    }
      public function updateRepair(Request $request){

        return redirect()->route('admin');

    }



}
