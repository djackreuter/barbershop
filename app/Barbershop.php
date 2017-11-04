<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model {

	public $timestamps = false;
	
    public function appts() {
      return $this->hasMany(Appt::class);
    }

    // protected $fillable = ['barbershopName'];
}
