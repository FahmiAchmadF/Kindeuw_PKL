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
		'Bahasa',
		'Genre',
		'Harga'

		];
    protected $primaryKey="id";
}
