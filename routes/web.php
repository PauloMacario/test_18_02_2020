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

Route::get('/blade/create', function () {
    return view('layouts.createUpdateUser');
});

Route::get('/list', function () {
    return view('layouts.listUsers');
});
