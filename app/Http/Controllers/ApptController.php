<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appt;

class ApptController extends Controller {

  /**
  * Display form to create an appt
  *
  * @return \Illuminate\Http\Response
  **/
    public function create() {
      return view('appt.create');
    }

}
