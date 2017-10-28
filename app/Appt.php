<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appt extends Model {

  protected $fillable = ['apptCustomerName', 'appt_id', 'apptDateTime'];

    public function barbershop() {
      return $this->belongsTo('App\Barbershop');
    }
}
