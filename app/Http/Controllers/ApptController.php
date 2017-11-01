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
   	$appt = Appt::all();
		
      return view('appt.create', compact('appt'));
    }

	/**
	* Store the appointment in the Database
	*
	* @return \Illuminate\Http\Response
	**/
	public function store() {
		$this->validate(request(), [
			'name' => 'required|max:128',
			'apptDateTime' => 'required'

		]);
		// create a new appointment using the request data
		Appt::create([
			'apptCustomerName' => request('name'),
			'appt_id' => request('barbershop'),
			'apptDateTime' => request('apptTime')
		]);

		// redirect
		return redirect('/');
	}

}
