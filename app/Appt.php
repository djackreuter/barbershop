<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appt extends Model {

  protected $fillable = ['apptCustomerName', 'appt_id', 'apptDateTime'];

    public function barbershops() {
      return $this->belongsToMany('App\Barbershop', 'appts_barbershops');
    }
}
