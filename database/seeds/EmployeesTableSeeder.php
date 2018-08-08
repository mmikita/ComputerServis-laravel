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
        $Employee = new \App\Employee();
        $Employee-> firstName = 'Tomasz';
        $Employee-> lastName = 'Jankowski';
        $Employee-> phoneNumber = '+48 000 000 000';
        $Employee-> password = '123';
        $Employee-> email = 'admin@admin.com';
        $Employee-> role = 'admin';
        $Employee -> save();     
           
    
        $Employee = new \App\Employee();
        $Employee-> firstName = 'Jan';
        $Employee-> lastName = 'Kowalski';
        $Employee-> phoneNumber = '+48 111 000 000';
        $Employee-> password = '123';
        $Employee-> email = 'jan@gmail.com';
        $Employee-> role = 'employee';
        $Employee -> save();



    }


}
