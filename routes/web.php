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
Route::get('/', function () {
    return view('welcome');
});

// This is the API code
Route::get('SendMakeModel', function () {
	$email = Input::get('email');
	$make = Input::get('make');
	$model = Input::get('model');



	return view('makemodelapi',
			[
				'email' => $email,
				'make' => $make,
				'model' => $model
			]
		);
});
