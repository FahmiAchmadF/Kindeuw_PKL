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
			'nama_pemilik_rekening' => 'required',
			'nama_bank' => 'required',
			'nomor_rekening' => 'required',
			'transfer_ke_no' => 'required',
			'email' => 'required'
		];
	}

}
