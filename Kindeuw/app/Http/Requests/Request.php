<?php namespace Kindeuw\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest {

	public function authorize()
	{
		return true;
	}

	public function rules(){
		return[
		'id'	=> 'require',
		'Judul' => 'required|min:5',
		'Penerbit' => 'required|min:5',
		'Harga' => 'required|numeric',
		'image'	=> 'require|mimes:png'];
		
	}

}
