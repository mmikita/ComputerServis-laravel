<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i=0; $i < 5; $i++) { 
        $Employee = new \App\Employee();
        $Employee-> firstName = 'janek'.$i;
        $Employee-> lastName = 'janek'.$i;
        $Employee-> phoneNumber = '321'.$i;
        $Employee-> password = bcrypt('123'.$i);
        $Employee-> email = '123@gmail.com'.$i;
        $Employee-> role = 'admin';
        $Employee -> save();     
           }
    }
}
