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
Route::get('/admin/addEmployee', 'EmployeeController@showAddEmployeeForm');
Route::post('/admin/addEmployee','EmployeeController@addEmployee')->name('employee.add');
Route::get('/admin/employeesList','EmployeeController@showEmployeesList')->name('employees.add');
Route::get('/admin/repairsList','RepairController@showRepairsList')->name('employees.add');


