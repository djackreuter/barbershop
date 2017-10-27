<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appt extends Model {

  protected $fillable = ['apptCustomerName', 'apptBarbershopId', 'apptDateTime'];

    public function barbershop() {
      return $this->belongsTo('App\Barbershop', 'apptBarbershopId');
    }
}
