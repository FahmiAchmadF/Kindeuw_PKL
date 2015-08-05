<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model {

	protected $table = 'konfirmasi_pembayaran';

	protected $fillable =[
	'id_transaksi',
	'nama_pemilik_rekening',
	'nama_bank',
	'nomor_rekening',
	'transfer_ke_no',
	'email'
	];

}
