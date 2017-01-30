<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', ['as' => 'employee.home', 'uses' => 'HomeController@index']);

Route::get('employee', ['as' => 'employee.list', 'uses' => 'EmployeeController@index']);
Route::get('employee/import', ['as' => 'employee.list', 'uses' => 'EmployeeController@import']);
Route::get('import', ['as' => 'employee.import', 'uses' => 'EmployeeController@import']);
Route::get('leave', ['as' => 'employee.leave', 'uses' => 'EmployeeController@leave']);
Route::get('calendar', ['as' => 'calendar.calendar', 'uses' => 'CalendarController@index']);
