<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repair;
use App\Employee;
use App\Http\Middleware\Admin;
use App\Http\Requests;




class CustomerRepairsController extends Controller
{

   
    
   


    public function addRepairViaCustomerForm()
    {    
       $repair = Repair::create(request(['descriptionOfTheFault', 'computerModel', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail']));
       \Session::flash('flash_message', 'twoja wiadomość została wysłana, niedługo się z Tobą skontaktujemy');
       return view('home');

   }






}
