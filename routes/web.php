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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 

Route::get('/all','EmployeeController@index')->name('employee.index'); 
Route::get('/employee/create','EmployeeController@create')->name('employee.create');
Route::post('/employee/store','EmployeeController@store')->name('employee.store'); 
Route::get('/employee/{id}/show','EmployeeController@show')->name('employee.show'); 
Route::get('/employee/{id}/edit','EmployeeController@edit')->name('employee.edit'); 

Route::put('/employee/{id}/name/update','EmployeeController@updateName')->name('employee.update.name'); 
Route::put('/employee/{id}/email/update','EmployeeController@updateEmail')->name('employee.update.email'); 
Route::put('/employee/{id}/password/update','EmployeeController@updatePassword')->name('employee.update.password'); 
Route::put('/employee/{id}/mobile/update','EmployeeController@updateMobile')->name('employee.update.mobile'); 
Route::put('/employee/{id}/designation/update','EmployeeController@updateDesignation')->name('employee.update.designation'); 
Route::put('/employee/{id}/address/update','EmployeeController@updateAddress')->name('employee.update.address'); 
Route::put('/employee/{id}/salary/update','EmployeeController@updateSalary')->name('employee.update.salary'); 
Route::put('/employee/{id}/role/update','EmployeeController@updateRole')->name('employee.update.role'); 

Route::delete('/employee/{id}/delete','EmployeeController@destroy')->name('employee.destroy'); 
	 
 