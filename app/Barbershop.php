<?php

namespace App;

class Barbershop extends Model {

	public $timestamps = false;

    public function appts() {
      return $this->hasMany(Appt::class);
    }
}
