<?php

namespace App\Http\Controllers;

use App\Barbershop;

class BarbershopController extends Controller {
	public function index() {
		$barbershop = Barbershop::all();

		return view('barbershop.index', compact('barbershop'));
	}
}
