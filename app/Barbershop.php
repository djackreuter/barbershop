<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model {
    public function appts() {
      return $this->hasMany(Appt::class);
    }

    public function users() {
    	return $this->belongsToMany('App\User', 'barbershop_user');
    }
}
