<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

 	protected $guarded = [];

	protected $fillable = [
		'apptCustomerName', 
		'barbershop_id',
		'apptTime',
		'barbershopName'
	];
}