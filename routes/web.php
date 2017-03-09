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

// This is the default loading location
Route::get('/', 'MakeModelController@index');

// This is the API code
Route::post('MakeModel', 'MakeModelController@submit');


