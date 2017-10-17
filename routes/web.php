<?php

Route::get('/users', 'UsersController@index');

Route::get('/users/{id}', 'UsersController@show');



Route::get('/about', function () {
	return view('about');
});