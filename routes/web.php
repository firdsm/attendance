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
