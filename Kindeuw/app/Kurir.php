<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model {

protected $table='kurir';

	public function transaksi()
	{
		return $this->belongsToMany('Kindeuw\Transaksi', 'transaksi_kurir', 'id_kurir', 'id_transaksi');
	}

}
