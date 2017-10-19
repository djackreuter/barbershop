<?php

Route::get('/', 'HomeController@home');

Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

