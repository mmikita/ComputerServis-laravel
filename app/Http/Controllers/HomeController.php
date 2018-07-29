<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Repair;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  $r = Repair::all();
       //  $path = resource_path() .'\json\generateRepairs.json'; 
       //  $json = json_decode(file_get_contents($path), true); 
       // $string = file_get_contents($path);
       //  $string = preg_replace("/[\r\n]+/", " ", $string);
       // $string= utf8_encode($string);
       // $array = json_decode($string, true);

     //   $repairsArray = json_encode(trim($repairsString), true);

        //echo  $array[0]['status'];
        
        return view('home');
    }
}
