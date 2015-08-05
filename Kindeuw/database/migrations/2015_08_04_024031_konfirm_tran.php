<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KonfirmTran extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('konfirmasi_pembayaran', function(Blueprint $table){
			$table->integer('id_transaksi');
			$table->string('nama_pemilik_rekening', 50);
			$table->string('nama_bank', 35);
			$table->string('nomor_rekening', 30);
			$table->string('transfer_ke_no', 30);
			$table->string('email', 35);
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
		Schema::drop('konfirmasi_pembayaran');
	}

}
