c<?php

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
            $table->integer('barbershop_id')->unsigned();
            $table->string('apptCustomerName', 128);
            $table->time('apptTime');

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
