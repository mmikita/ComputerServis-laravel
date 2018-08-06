<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repair;
use App\Employee;
use App\Http\Middleware\Admin;
use App\Http\Requests;






class AdminEmployeeController extends Controller
{

public function __construct()
{
	$this->middleware([Admin::class, 'auth']);
}


    public function showAddEmployeeForm()
    {
    	return view('addEmployee');
    }

     public function addEmployee()
    {
    	
        return view('auth/register');
    }
     

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
      public function store()
    {

      // $password = bcrypt(Input::get('password'));
        
        $employee = Employee::create(request(['firstName', 'lastName', 'password', 'email', 'role', 'phoneNumber']));


        return redirect()->route('employees.list');
    }

    public function showEmployeesList()
    {

        $employees = Employee::all();
        return view('employeesList') -> with('employees',$employees);

    }


    public function editEmployeeGET(Request $request)
    {

    $id = $request->input('id');
    $employee = Employee::where('id', $id)->first();
    return view('editEmployee')->with('employee', $employee);        

    }

public function editEmployeePOST(Request $request){
       $id = $request->input('id');
    $employee = Employee::firstOrFail($id);
    $input = $request->all();
$employee ->fill($input);
    $employee -> save();
    return  back();
}

public function deleteEmployee(Request $request){

    $id = $request->input('id');
    $employee = Employee::where('id', $id)->first();
    $employee->delete();
    return back();

}



  public function editPasswordGET(Request $request)
    {

    $id = $request->input('id');
    $employee = Employee::where('id', $id)->first();
    return view('editPassword')->with('employee', $employee);        

    }

public function editPasswordPOST(Request $request){
    $id = $request->input('id');
    $employee = Employee::where('id', $id)->first();;
  
    $employee->password = $request->get('password');
    $employee -> save();
    $employees = Employee::all();
    return view('employeesList') -> with('employees',$employees);
}













}
