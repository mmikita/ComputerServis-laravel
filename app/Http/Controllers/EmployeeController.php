<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;




class EmployeeController extends Controller
{

public function __construct()
{
	$this->middleware('auth');
}


    public function showAddEmployeeForm()
    {
    	return view('addEmployee');
    }

     public function addEmployee()
    {
    	echo "nic tu nie ma";

    	// return view('addEmployee');
    }

    public function showEmployeesList()
    {

        $employees = Employee::all();
        return view('employeesList') -> with('employees',$employees);

    }

}
