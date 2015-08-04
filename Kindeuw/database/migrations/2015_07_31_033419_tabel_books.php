<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelBooks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table){
			$table->increments('id');
			$table->integer('stok');
			$table->string('Judul', 30);
			$table->string('Penulis', 40);
			$table->string('Penerbit', 35);
			$table->text('Deskripsi');
			$table->integer('Banyak_halaman');
			$table->integer('Harga');
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
		Schema::drop('books');
	}

}
