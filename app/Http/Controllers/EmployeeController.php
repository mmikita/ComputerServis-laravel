<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



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
}
