<?php namespace Kindeuw;

use Illuminate\Database\Eloquent\Model;

class Model_User extends Model {

	//
	protected $table = 'user';

	protected $fillable = [
		'nama',
		'username',
		'email',
		'password'
	];
}
