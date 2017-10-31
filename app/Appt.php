<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appt extends Model {
    public function barbershop() {
      return $this->belongsTo(Barbershop::class);
    }
}
