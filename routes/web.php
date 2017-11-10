<?php

Route::get('/', 'HomeController@index')->name('home');

// user routes
Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

// barbershop routes
Route::resource('barbershops', 'BarbershopController');

// appt routes
Route::post('/barbershops/{barbershop}/appt', 'ApptController@store');

Route::get('/barbershops/{barbershop}/manage', 'ApptController@destroy');

// authentication routes
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');