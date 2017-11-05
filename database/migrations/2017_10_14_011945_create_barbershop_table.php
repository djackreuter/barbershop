<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbershopTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbershops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barbershopName', 128);
            $table->string('barbershopEmail', 128);
            $table->string('barbershopPassword', 60)->nullable();
            $table->decimal('barbershopPrice', 4, 2)->nullable();
            $table->string('barbershopBio', 500)->nullable();
            $table->string('remember_token', 100)->nullable();

            $table->unique('barbershopEmail');
            $table->unique('barbershopName');
            
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
