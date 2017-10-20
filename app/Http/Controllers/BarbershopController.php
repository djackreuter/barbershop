<?php

namespace App\Http\Controllers;

use App\Barbershop;

class BarbershopController extends Controller {
	public function index() {
		$barbershops = Barbershop::all();

		return view('barbershop.index', compact('barbershops'));
	}
}
