<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
	Appt,
	Barbershop
};

class ApptController extends Controller {

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
	public function destroy($id) {
		$barbershop = Barbershop::find($id);
		$appt = Appt::all();

		return view('barbershop.manage', compact('barbershop', 'appt'));
	}

}
