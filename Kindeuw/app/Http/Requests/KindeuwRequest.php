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
		'stok' => 'required|min:1|numeric|max:9999999999',
		'Judul' => 'required|min:5|max:60',
		'Penulis' => 'required|min:5|max:40',
		'Penerbit' => 'required|min:5|max:35',
		'Deskripsi' => 'required|min:25',
		'Banyak_halaman' => 'required|min:1|max:99999999999|numeric',
		'Bahasa' => 'required',
		'Genre' => 'required',
		'Harga' => 'required|min:3|max:99999999999|numeric',
		'image'	=> 'mimes:png,jpg,jpeg'];
	}

}
