<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', ['as' => 'employee.home', 'uses' => 'HomeController@index']);

Route::get('dashboard', ['as' => 'employee.home', 'uses' => 'HomeController@dashboard']);

Route::get('employee', ['as' => 'employee.list', 'uses' => 'EmployeeController@index']);
Route::get('employee/add', ['as' => 'employee.add', 'uses' => 'EmployeeController@add']);
Route::get('employee/calendar', ['as' => 'employee.calendar', 'uses' => 'EmployeeController@calendar']);
