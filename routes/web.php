<?php

Route::get('/', 'HomeController@home');

// user routes
Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

// barbershop routes
Route::resource('barbershops', 'BarbershopController');

// appt routes
Route::get('/appt/create', 'ApptController@create');

Route::post('/appt', 'ApptController@store');
