<?php

use Illuminate\Http\Request;


Route::resource('home', 'HomeController');

Route::get('home/user/{user}', 'HomeController@show');

Route::get('home/{user}/edit', 'HomeController@edit');

Route::resource('user', 'UserController');

Route::resource('phone', 'PhoneController');



