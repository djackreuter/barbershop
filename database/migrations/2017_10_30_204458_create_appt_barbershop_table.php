<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApptBarbershopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appt_barbershop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appt_id')->unsigned();
            $table->integer('barbershop_id')->unsigned();

            $table->foreign('appt_id')->references('id')->on('appts');
            $table->foreign('barbershop_id')->references('id')->on('barbershops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appt_barbershop');
    }
}
