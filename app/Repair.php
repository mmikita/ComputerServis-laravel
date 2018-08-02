<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repair extends Model
{
    public function employee()
    {
    	return $this->belongsTo('App\Employee', 'employee_id'); 
    }
    protected $fillable = [
'descriptionOfTheFault', 'computerModel', 'status', 'customerFirstName', 'customerLastName', 'customerPhoneNumber', 'customerEmail', 'comment', 'employee_id' 
];



protected $attributes = [
        'status' => 'oczekujące na zatwierdzenie',  
        'comment' => '',  
        'employee_id' => 0,
        'descriptionOfTheFault' => 'brak opisu'

    ];
}
