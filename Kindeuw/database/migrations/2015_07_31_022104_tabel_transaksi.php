<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelTransaksi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi', function(Blueprint $table){
			$table->string('id_faktur');
			$table->string('email', 30);
			$table->string('nama', 50);
			$table->string('alamat', 160);
			$table->string('no_telp', 12);
			$table->string('status_transfer', 1);
			$table->string('status_admin_terima', 1);
			$table->string('status_terima_barang', 1);
			$table->string('id');
			$table->string('Judul', 30);
			$table->integer('Harga');
			$table->integer('jumlah_beli');
			$table->string('partner_antar', 50);
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
