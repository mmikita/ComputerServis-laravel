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
Route::get('/admin/addEmployee', 'EmployeeController@addEmployee');
Route::post('/admin/addEmployee','EmployeeController@store')->name('employee.add');
Route::post('/addRepairViaCustomerForm','RepairController@addRepairViaCustomerForm')->name('custRepair');
Route::get('/cennik','HomeController@costs');
Route::get('/admin/employeesList','EmployeeController@showEmployeesList')->name('employees.add');
Route::get('/admin/repairsList','RepairController@showRepairsList')->name('employees.add');
Route::get('/admin/logout', 'Auth\LoginController@logout');



