<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appt;
use App\Barbershop;

class ApptController extends Controller {

	/**
	 * Display form to create an appt
	 *
	 * @return \Illuminate\Http\Response
	 **/
	public function create() {
   	$barbershops = Barbershop::all();
		// $barbershops = \DB::table('appts')
		// 	->join('barbershops', 'appts.apptBarbershopId', '=', 'barbershops.id')
		// 	->select('barbershops.barbershopName')
		// 	->get();
      return view('appt.create', compact('barbershops'));
    }

}
