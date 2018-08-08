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
Route::get('/admin', 'AdminRepairsController@awaitingRepairs')->name('admin');
Route::get('/admin/editRepair', 'AdminRepairsController@updateRepairGET');
Route::get('/admin/deleteRepair', 'AdminRepairsController@deleteRepair');
Route::get('/admin/addRepair',   'AdminRepairsController@addRepairGET');
Route::get('/employee/addRepair',   'EmployeeRepairsController@addRepairGET');
Route::get('/admin/allRepairs',   'AdminRepairsController@showAllRepairs');
Route::get('/admin/currentRepairs',   'AdminRepairsController@showCurrentRepairs');
Route::get('/admin/completedRepairs',   'AdminRepairsController@showCompletedRepairs');
Route::get('/admin/rejectedRepairs',   'AdminRepairsController@showRejectedRepairs');
Route::get('/admin/problematicRepairs',   'AdminRepairsController@showProblematicRepairs');
Route::get('/admin/employeesList','AdminEmployeeController@showEmployeesList')->name('employees.list');
Route::get('/admin/editEmployee','AdminEmployeeController@editEmployeeGET');
Route::get('/admin/deleteEmployee','AdminEmployeeController@deleteEmployee');
Route::get('/admin/editPassword','AdminEmployeeController@editPasswordGET');
Route::get('/employee','EmployeeRepairsController@showMyRepairs');
Route::get('/employee/myAllRepairs','EmployeeRepairsController@showMyAllRepairs');
Route::get('/employee/allRepairs','EmployeeRepairsController@allRepairs');
Route::get('/employee/awaitingRepairs','EmployeeRepairsController@awaitingRepairs');
Route::get('/employee/takeRepair','EmployeeRepairsController@takeRepair');
Route::get('/employee/rejectRepair','EmployeeRepairsController@rejectRepair');
Route::get('/employee/finishRepair','EmployeeRepairsController@finishRepair');
Route::get('/employee/editRepair','EmployeeRepairsController@updateRepairGET');

Route::post('/employee/addRepair',   'EmployeeRepairsController@addRepairPOST');
Route::post('/employee/changeRepairStatus','EmployeeRepairsController@changeRepairStatus');
Route::post('/employee/searchRepair','EmployeeRepairsController@searchRepair');
Route::post('/employee/editRepair','EmployeeRepairsController@updateRepairPOST');
Route::post('/admin/editPassword','AdminEmployeeController@editPasswordPOST');
Route::post('/admin/editEmployee','AdminEmployeeController@editEmployeePOST');
Route::post('/admin/editRepair', 'AdminRepairsController@updateRepairPOST');
Route::post('/admin/addRepair',   'AdminRepairsController@addRepairPOST');
Route::post('/admin/updateRepair', 'AdminRepairsController@updateRepairStatus');
Route::post('/admin/updateRepairEmp', 'AdminRepairsController@updateRepairEmployee');
Route::post('/admin/addEmployee','AdminEmployeeController@store')->name('employee.add');
Route::post('/addRepairViaCustomerForm','CustomerRepairsController@addRepairViaCustomerForm')->name('custRepair');
Route::post('/admin/searchRepair','AdminRepairsController@searchRepair');	


Route::get('/admin/repairsList','AdminRepairsController@showRepairsList')->name('employees.add');
Route::get('/admin/logout', 'Auth\LoginController@logout');
Route::get('/logout', 'Auth\LoginController@logout');






