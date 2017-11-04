<?php

Route::get('/', 'HomeController@index');

// user routes
Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

// barbershop routes
Route::resource('barbershops', 'BarbershopController');

// appt routes
Route::post('/barbershops/{barbershop}/appt', 'ApptController@store');

// authentication routes
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::get('/logout', 'SessionsController@destroy');