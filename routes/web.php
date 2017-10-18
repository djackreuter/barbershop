<?php

Route::get('/', 'UsersController@index');

Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');



Route::get('/about', function () {
	return view('about');
});