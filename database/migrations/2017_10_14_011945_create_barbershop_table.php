<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbershopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbershop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barbershopBio', 500)->nullable();
            $table->string('barbershopName', 128);
            $table->string('barbershopHash', 128)->nullable();
            $table->string('barbershopSalt', 64)->nullable();
            $table->dateTime('barbershopAptDateTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbershop');
    }
}
