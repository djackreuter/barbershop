<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller {
    public function index() {
		 $users = Users::all();

		 return view('users.index', compact('users'));
	 }

	 public function show($id) {
		 $user = Users::find($id);

		 return view('users.show', compact('user'));
	 }
}
