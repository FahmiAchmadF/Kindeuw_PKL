<?php namespace Kindeuw;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;


class Kindeuw extends Model {

	protected $table = 'books';

	protected $fillable = [
		'id',
		'Judul',
		'Penerbit',
		'Deskripsi',
		'Harga'
		];
    protected $primaryKey="id";
}
