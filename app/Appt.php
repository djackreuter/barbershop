<?php

namespace App;

class Appt extends Model {

	public $timestamps = false;
	
    public function barbershop() {
      return $this->belongsTo(Barbershop::class);
    }

    // public static function orderByTime() {
    //   return static::selectRaw('apptCustomerName, apptTime')
    //   ->orderByRaw('apptTime ASC')
    //   ->get();
    // }
}
