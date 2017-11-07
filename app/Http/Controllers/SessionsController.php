<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller {

    /**
     * log barbershop into session
     *
     */
    public function create() {

        return view('sessions.create');
    }

    /**
     * log the user out of the session
     * 
     */
    public function destroy() {
    	auth()->logout();

    	return redirect('/');
    }
}
