<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model {
    public function appt() {
      return $this->hasMany('App\Appt', 'apptBarbershopId');
    }
}
