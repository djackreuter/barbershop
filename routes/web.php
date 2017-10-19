<?php

Route::get('/', 'UsersController@index');

Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

