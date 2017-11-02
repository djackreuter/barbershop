<?php

namespace App;

class Appt extends Model {

	public $timestamps = false;
	
    public function barbershop() {
      return $this->belongsTo(Barbershop::class);
    }
}
