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

		/**
		* Store the appointment in the Database
		*
		* @return \Illuminate\Http\Response
		**/
		public function store() {
			// create a new appointment using the request data
			$appt = new Appt;
			Appt::create([
				'apptCustomerName' => request('name'),
				'appt_id' => request('barbershop'),
				'apptDateTime' => request('apptTime')
			]);

			// redirect
			return redirect('/');
		}

}
