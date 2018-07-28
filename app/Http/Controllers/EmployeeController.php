<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use App\Employee;




class EmployeeController extends Controller
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

    public function showEmployeesList()
    {

        $employees = Employee::all();
        return view('employeesList') -> with('employees',$employees);

    }

}
