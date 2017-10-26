<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('userBarbershopId')->unsigned();
			$table->string('userName', 50);
			$table->string('userEmail', 128);
			$table->string('userHash', 128)->nullable();
			$table->string('userSalt', 64)->nullable();

			$table->unique('userEmail');
			$table->index('userBarbershopId');
			$table->foreign('userBarbershopId')->references('id')->on('barbershops');
			});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
