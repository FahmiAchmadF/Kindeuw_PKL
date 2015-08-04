<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BukuGenre extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buku_genre', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('id_buku');
			$table->foreign('id_buku')->references('id')->on('books')->onDelete('CASCADE');
			$table->unsignedInteger('id_genre');
			$table->foreign('id_genre')->references('id')->on('genre')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('buku_genre');
	}

}
