<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appt;
use App\Barbershop;

class ApptController extends Controller {

	/**
	* Store the appointment in the Database
	*
	* @return \Illuminate\Http\Response
	**/
	public function store(Barbershop $barbershop) {
		$this->validate(request(), [
			'name' => 'required|max:128'
			// 'apptDateTime' => 'required'

		]);
		// create a new appointment using the request data
		Appt::create([
			'apptCustomerName' => request('name'),
			'barbershop_id' => $barbershop->id,
			'apptTime' => request('apptTime')
		]);

		// redirect
		return redirect('/');
	}

}
