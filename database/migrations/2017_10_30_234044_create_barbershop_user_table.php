<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbershopUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbershop_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barbershop_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('barbershop_id')->references('id')->on('barbershops');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbershop_user');
    }
}
