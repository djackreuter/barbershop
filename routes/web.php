<?php

use App\Users;

Route::get('/users', function () {

	// query builder
	//	$users = DB::table('users')->get();

	// eloquent
	$users = Users::all();

	return view('users.index', compact('users'));

});

Route::get('/users/{userId}', function ($id) {

//	$user = DB::table('users')->find($id);

	$user = Users::find($id);

	return view('users.show', compact('user'));

});

Route::get('/about', function () {
	return view('about');
});