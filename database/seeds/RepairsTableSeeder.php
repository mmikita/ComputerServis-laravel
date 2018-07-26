<?php

use Illuminate\Database\Seeder;

class RepairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5; $i++) { 
        $Repair = new \App\Repair();
        $Repair-> employee_id = $i;
        $Repair-> computerModel = 'Model nr.'.$i;
        $Repair-> descriptionOfTheFault = 'to jest problem nr.'.$i;
        $Repair-> status = 'status nr'.$i;
        $Repair -> save();     
           }  
  $Repair = new \App\Repair();
        $Repair-> employee_id = 2;
        $Repair-> computerModel = 'Model nr.';
        $Repair-> descriptionOfTheFault = 'to jest problem nr.';
        $Repair-> status = 'status nr';
        $Repair -> save();  
    }
}
