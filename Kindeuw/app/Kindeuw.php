<?php namespace Kindeuw;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;


class Kindeuw extends Model {

	protected $table = 'books';

	protected $fillable = [
		'id',
		'stok',
		'Judul',
		'Penulis',
		'Penerbit',
		'Deskripsi',
		'Banyak_halaman',
		'Harga'

		];
    protected $primaryKey="id";

    public function Bahasa(){
    	return $this->belongsToMany('Kindeuw\Bahasa', 'buku_bahasa', 'id_buku', 'id_bahasa');
    }

    public function Genre(){
    	return $this->belongsToMany('Kindeuw\Genre', 'buku_genre', 'id_buku', 'id_genre');
    }

    public function opsibahasa(){
    	return $this->Bahasa->lists('id');
    }

    public function opsigenre(){
    	return $this->Genre->lists('id');
    }

    public function genre_nya(){
    	return $this->Genre->lists('opsi_genre');
    }

    public function bahasa_nya(){
    	return $this->Bahasa->lists('opsi_bahasa');
    }
}
