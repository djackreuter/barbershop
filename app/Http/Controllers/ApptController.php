<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
	Appt,
	Barbershop
};

class ApptController extends Controller {

	// insure that only logged in barbershops can access manage page
	public function __construct() {
		$this->middleware('auth', ['except' => 'store']);
	}

	/**
	* Store the appointment in the Database
	*
	* @return \Illuminate\Http\Response
	**/
	public function store(Barbershop $barbershop) {
		$this->validate(request(), [
			'name' => 'required|max:128',
			'apptTime' => 'required'

		]);
		// create a new appt using the request data
		Appt::create([
			'apptCustomerName' => request('name'),
			'barbershop_id' => $barbershop->id,
			'apptTime' => request('apptTime')
		]);

		// redirect
		return back();
	}

	/**
	 * Delete the appt from the database
	 * 
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$barbershop = Barbershop::find($id);
		$appt = Appt::all();

		return view('barbershop.manage', compact('barbershop', 'appt'));
	}

	public function destroy($id) {
		$appt = Appt::find($id);
		$appt->delete();

		return back();
	}

}
