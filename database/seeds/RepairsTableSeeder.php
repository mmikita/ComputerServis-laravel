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

    $path = resource_path() .'\json\generateRepairs.json'; 

//uncomment to seed examples repairs 
/* 
        $json = json_decode(file_get_contents($path), true); 
        $string = file_get_contents($path);
        $string = preg_replace("/[\r\n]+/", " ", $string);
        $array = json_decode($string, true);
        $i = 0;
        foreach ($array as $r)
        {

    $Repair = new \App\Repair();
        $Repair-> employee_id = $r['employee_id'];
        $Repair-> computerModel = $r['computerModel'];
        $Repair-> descriptionOfTheFault = $r['descriptionOfTheFault'];
        $Repair-> status = $r['status'];
        $Repair-> comment = $r['comment'];
        $Repair-> CustomerFirstName = 'Imie'.$i;
        $Repair-> CustomerLastName = 'Nazwisko'.$i;
        $Repair-> CustomerPhoneNumber = 'tel:11'.$i;
        $Repair-> CustomerEmail = 'email'.$i."@gmail.com";
        $Repair -> save();  
        $i++;
        }
*/
    }
}
