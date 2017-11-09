<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller {

    public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    /**
     * log barbershop into session
     *
     */
    public function create() {

        return view('sessions.create');
    }

    /**
     * authenticate the user
     * 
     */
    public function store() {
        if(!auth()->attempt([
            'barbershopName' => request('name'),
            'barbershopPassword' => Hash::check(request('password'))])) {
                return redirect('/users');
            }
        return redirect('/');
     }

    /**
     * log the user out of the session
     * 
     */
    public function destroy() {
    	auth()->logout();

    	return redirect()->home();
    }
}
