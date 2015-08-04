<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BukuBahasa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buku_bahasa', function(Blueprint $table)
		{
			$table->increments('id');

			$table->unsignedInteger('id_buku');
			$table->foreign('id_buku')->references('id')->on('books')->onDelete('CASCADE');
			$table->unsignedInteger('id_bahasa');
			$table->foreign('id_bahasa')->references('id')->on('bahasa')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('buku_bahasa');
	}

}
