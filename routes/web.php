<?php

Route::get('/', 'HomeController@home');

// user routes
Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

// barbershop routes
Route::resource('/barbershops', 'BarbershopController');

Route::get('/barbershops/{barbershop}', 'BarbershopController@show');

Route::get('/barbershops/appt', 'BarbershopController@appt');
