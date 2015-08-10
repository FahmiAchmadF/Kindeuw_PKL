<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class Konfirmasi extends Request {

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
			'id_transaksi' => 'required',
			'nama_pemilik_rekening' => 'required|min:3|max:50',
			'nama_bank' => 'required|min:2|max:35',
			'nomor_rekening' => 'required|min:5|max:30',
			'transfer_ke_no' => 'required|min:5|max:30',
			'email' => 'required|min:5|max:35'
		];
	}

}
