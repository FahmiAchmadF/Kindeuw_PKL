<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi', function(Blueprint $table){
			$table->increments('id');
			$table->string('email', 30);
			$table->string('nama', 50);
			$table->string('alamat', 160);
			$table->string('kota', 30);
			$table->string('no_telp', 12);
			$table->string('status_transfer', 1);
			$table->string('status_admin_terima', 1);
			$table->string('status_terima_barang', 1);
			$table->integer('id_buku');
			$table->string('Judul', 30);
			$table->integer('Harga');
			$table->integer('jumlah_beli');
			$table->integer('Total');
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
		Schema::drop('transaksi');
	}

}
