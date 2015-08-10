<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model {

	protected $table='transaksi';

	protected $fillable = [
	'email',
	'nama',
	'alamat',
	'kota',
	'no_telp',
	'id_buku',
	'Judul',
	'Harga',
	'jumlah_beli',
	'kurir'
	];

}
