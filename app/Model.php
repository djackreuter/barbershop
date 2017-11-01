<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

 	protected $guarded = ['id'];

	protected $fillable = ['apptCustomerName', 'appt_id','apptDateTime'];
}