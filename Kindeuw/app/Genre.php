<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

	protected $table = 'genre';

	protected $fillable = ['opsi_genre'];

	public function books(){
		return $this->belongsToMany('Kindeuw\Kindeuw', 'buku_genre', 'id_genre', 'id_buku');
	}
}
