<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use App\Employee;
use Illuminate\Support\Facades\Input;





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


        //return view('');
    }

    public function showEmployeesList()
    {

        $employees = Employee::all();
        return view('employeesList') -> with('employees',$employees);

    }

}
