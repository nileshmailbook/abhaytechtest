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
Route::put('/employee/{id}/update','EmployeeController@update')->name('employee.update'); 
Route::delete('/employee/{id}/delete','EmployeeController@destroy')->name('employee.destroy'); 
	 
 