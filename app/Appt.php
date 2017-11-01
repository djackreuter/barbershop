<?php

namespace App;

class Appt extends Model {
    public function barbershop() {
      return $this->belongsTo(Barbershop::class);
    }
}
