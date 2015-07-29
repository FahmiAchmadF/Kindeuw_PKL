<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class KindeuwRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return[
		'Judul' => 'required|min:5',
		'Penerbit' => 'required|min:5',
		'Harga' => 'required|numeric',
		'Deskripsi' => 'required|min:25',
		'image'	=> 'mimes:png,jpg,jpeg'];
	}

}
