<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model {
    public function appts() {
      return $this->belongsToMany('App\Appt', 'appts_barbershops');
    }
}
