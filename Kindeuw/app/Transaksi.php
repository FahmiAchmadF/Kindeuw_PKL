<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model {

	protected $table='transaksi';

	protected $fillable = [
	'email',
	'nama',
	'alamat',
	'no_telp',
	'id_buku',
	'Judul',
	'Harga',
	'jumlah_beli',
	];

	public function Kurir(){
		return $this->belongsToMany('Kindeuw\Kurir', 'transaksi_kurir', 'id_transaksi', 'id_kurir');
	}

	public function OpsiKurir(){
		return $this->Kurir->lists('opsi_kurir');
	}

}
