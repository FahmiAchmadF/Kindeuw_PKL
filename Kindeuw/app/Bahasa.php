<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model {

	protected $table = 'bahasa';

	protected $fillable = ['opsi_bahasa'];

	public function books()
	{
		return $this->belongsToMany('Kindeuw\Kindeuw', 'buku_bahasa', 'id_bahasa', 'id_buku');
	}
}
