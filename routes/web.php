<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin/addEmployee', 'AdminEmployeeController@addEmployee');
Route::get('/admin/awaitForEmp', 'AdminRepairsController@awaitingForEmpRepairs');
Route::get('/admin', 'AdminRepairsController@awaitingRepairs');

Route::post('/admin/updateRepair', 'AdminRepairsController@updateRepair');


Route::post('/admin/addEmployee','AdminEmployeeController@store')->name('employee.add');
Route::post('/addRepairViaCustomerForm','AdminRepairsController@addRepairViaCustomerForm')->name('custRepair');
Route::get('/cennik','HomeController@costs');
Route::get('/admin/employeesList','AdminEmployeeController@showEmployeesList')->name('employees.add');
Route::get('/admin/repairsList','AdminRepairsController@showRepairsList')->name('employees.add');
Route::get('/admin/logout', 'Auth\LoginController@logout');






