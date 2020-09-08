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

Route::get('/', function()
{
  return redirect()->route('home.index');
});

//Session Validation Not Required
Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@execute');

Route::get('/logout', 'LogoutController@execute')->name('logout.execute');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin', 'AdminController@insert');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::get('/admin/edit/{id}', 'AdminController@modify')->name('admin.edit');
Route::post('/admin/edit/{id}', 'AdminController@edit');

Route::get('/employee', 'EmployeeController@index')->name('employee.index');
Route::post('/employee', 'EmployeeController@insert');
Route::get('/employee/delete/{id}', 'EmployeeController@delete')->name('employee.delete');
Route::get('/employee/edit/{id}', 'EmployeeController@modify')->name('employee.edit');
Route::post('/employee/edit/{id}', 'EmployeeController@edit');

Route::get('/reg', 'RegController@index')->name('reg.index');
Route::post('/reg', 'RegController@insert');
