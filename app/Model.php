<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Model extends Eloquent implements Authenticatable {

	use AuthenticableTrait;

 	protected $guarded = [];

	protected $fillable = [
		'apptCustomerName', 
		'barbershop_id',
		'apptTime',
		'barbershopName',
		'barbershopPassword',
		'barbershopEmail',
		'barbershopPrice',
		'barbershopBio'
	];

	protected $hidden = [
		'remember_token'
	];
}