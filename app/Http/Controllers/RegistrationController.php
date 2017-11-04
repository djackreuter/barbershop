<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barbershop;

class RegistrationController extends Controller {

    public function create() {
    	return view('sessions.create');
    }

    public function store() {
    	// validate form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|max:30',
    		'price' => 'required'
    	]);

    	// create and save the barbershop
    	$barbershop = Barbershop::create([
    		'barbershopName' => request('name'),
    		'barbershopEmail' => request('email'),
    		'barbershopPassword' => request('password'),
    		'barbershopPrice' => request('price'),
    		'barbershopBio' => request('bio')
    	]);

    	// Sign them in
    	auth()->login($barbershop);

    	// redirect
    	return redirect('/');
    }
}
