<?php

namespace App\Http\Controllers;

use App\Barbershop;

class BarbershopController extends Controller {
	public function index() {
		$barbershop = Barbershop::all();

		return view('barbershop.index', compact('barbershop'));
	}

	public function show(Barbershop $barbershop) {

		return view('barbershop.show', compact('barbershop'));
	}

	public function appt() {
		return view('barbershop.appt');
	}
}
