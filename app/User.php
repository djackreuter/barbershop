<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    public function barbershops() {
    	return $this->belongsToMany('App\barbershop', 'barbershop_user');
    }
}
