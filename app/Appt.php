<?php

namespace App;


class Appt extends Model {
    public function barbershops() {
      return $this->belongsTo(Barbershop::class);
    }
}
