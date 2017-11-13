<?php

Route::get('/', 'HomeController@index')->name('home');

// barbershop routes
Route::resource('barbershops', 'BarbershopController');

// appt routes
Route::post('/barbershops/{barbershop}/appt', 'ApptController@store');

Route::get('/barbershops/{barbershop}/manage', 'ApptController@show');

Route::delete('/delete/{id}', ['uses' => 'ApptController@destroy', 'as' => 'delete.appt']);

// authentication routes
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', [ 'as' => 'login', 'uses' => 'SessionsController@create']);

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');