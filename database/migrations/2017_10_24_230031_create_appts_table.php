<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('apptCustomerName', 128);
            $table->dateTime('apptDateTime');
            $table->integer('appt_id')->unsigned();
            $table->timestamps();

            $table->index('appt_id');
        });

        Schema::table('appts', function($table) {
			  $table->foreign('appt_id')->references('id')->on('barbershops');
		  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appts');
    }
}
