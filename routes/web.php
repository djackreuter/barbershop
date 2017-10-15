<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users', function () {

	$users = DB::table('users')->get();

	return view('users.index', compact('users'));

});

Route::get('/users/{userId}', function ($id) {

	$user = DB::table('users')->find($id);

	return view('users.show', compact('user'));

});

Route::get('/about', function() {
	return view('about');
});