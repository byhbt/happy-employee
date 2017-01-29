<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

// Because of upgrading from laravel 5.2 to 5.3
Route::get('/logout', 'Auth\LoginController@logout');