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
    return view('board');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/attend', 'AttendanceController@attending');

Route::post('/permit', 'AttendanceController@permit');

Route::post('/sick', 'AttendanceController@sick');

Route::post('/remote', 'AttendanceController@remote');

Route::get('/employeeauth', 'AttendanceController@authEmployee');

Route::get('/report', 'ReportController@index');
Route::get('/report/{params}', 'ReportController@index');
Route::get('/report/detail/{id}', 'ReportController@employeeDetail');

Route::get('/employees', 'EmployeeController@index');
Route::get('/employees/insert', 'EmployeeController@form');
Route::post('/employees/insert', 'EmployeeController@insert');
Route::get('/employees/update/{id}', 'EmployeeController@form');
Route::post('/employees/update/{id}', 'EmployeeController@update');
Route::get('/employees/delete/{id}', 'EmployeeController@delete');