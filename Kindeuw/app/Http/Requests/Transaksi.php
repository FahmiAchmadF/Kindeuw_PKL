<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class Transaksi extends Request {

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
		return [
			'id_buku'=>'required',
			'email'=>'required',
			'nama'=>'required|min:3|max:50',
			'alamat'=>'required|min:20|max:160',
			'no_telp'=>'required|min:999999999|max:99999999999|numeric',
			'Judul'=>'required',
			'Harga'=>'required',
			'jumlah_beli'=>'required|min:1|max:9999999999|numeric',
			'kurir'=>'required'
		];
	}

}
