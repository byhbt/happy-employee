<?php

Route::auth();

Route::get('/', ['as' => 'employee.home', 'uses' => 'HomeController@dashboard']);
Route::get('home', ['as' => 'employee.home', 'uses' => 'HomeController@dashboard']);
Route::get('employee', ['as' => 'employee.list', 'uses' => 'EmployeeController@index']);
Route::get('employee/add', ['as' => 'employee.add', 'uses' => 'EmployeeController@add']);
Route::post('employee/add', ['as' => 'employee.add', 'uses' => 'EmployeeController@store']);
Route::get('employee/edit/{id}', ['as' => 'employee.add', 'uses' => 'EmployeeController@edit']);
Route::get('employee/calendar', ['as' => 'employee.calendar', 'uses' => 'EmployeeController@calendar']);
