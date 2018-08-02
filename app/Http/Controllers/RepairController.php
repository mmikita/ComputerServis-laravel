<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repair;
use App\Employee;


class RepairController extends Controller
{
    public function showRepairsList()
    {
        // $repairs = Repair::all()->paginate(10);
        $repairs = Repair::paginate(5);
        //$repairs->load('employees');  
        return view('repairsList') -> with('repairs', $repairs);
    }


    public function addRepairViaCustomerForm()
    {    
           $repair = Repair::create(request(['descriptionOfTheFault', 'computerModel', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail']));
\Session::flash('flash_message', 'twoja wiadomość została wysłana, niedługo się z Tobą skontaktujemy');
   return view('home');
             
    }

}
