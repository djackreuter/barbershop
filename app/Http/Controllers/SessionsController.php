<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Apt\Barbershop;

use Illuminate\Support\Facades\Auth;

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
        if(! Auth::attempt(request(['barbershopEmail', 'password']))) {
            return back()->withErrors([
                'message' => 'Email or password is incorrect'
            ]);
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
