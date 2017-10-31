<?php

namespace App;


class Appt extends Model {
    public function barbershops() {
      return $this->belongsToMany('App\Barbershop', 'appt_barbershop');
    }
}
