<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TansaksiKurir extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi_kurir', function(Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('id_transaksi');
			$table->foreign('id_transaksi')->references('id')->on('transaksi')->onDelete('CASCADE');
			$table->unsignedInteger('id_kurir');
			$table->foreign('id_kurir')->references('id')->on('kurir')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaksi_kurir');
	}

}
