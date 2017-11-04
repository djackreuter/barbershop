<?php

Route::get('/', 'HomeController@index');

// user routes
Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

// barbershop routes
Route::resource('barbershops', 'BarbershopController');

// appt routes
Route::post('/barbershops/{barbershop}/appt', 'ApptController@store');
