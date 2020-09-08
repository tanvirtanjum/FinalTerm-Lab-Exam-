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

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin', 'AdminController@insert');

Route::get('/reg', 'RegController@index')->name('reg.index');
Route::post('/reg', 'RegController@insert');
