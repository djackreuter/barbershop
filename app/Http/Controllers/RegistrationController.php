<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barbershop;

class RegistrationController extends Controller {

    public function create() {
    	return view('registration.create');
    }

    public function store() {
    	// validate form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|max:60|confirmed',
    		'price' => 'required'
    	]);

    	// create and save the barbershop
    	$barbershop = Barbershop::create([
    		'barbershopName' => request('name'),
    		'barbershopEmail' => request('email'),
    		'barbershopPassword' => bcrypt(request('password')),
    		'barbershopPrice' => request('price'),
    		'barbershopBio' => request('bio')
    	]);

    	// Sign them in
    	auth()->login($barbershop);

    	// redirect
    	return redirect('/');
    }
}
