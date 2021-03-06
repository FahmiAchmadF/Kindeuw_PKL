<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class Kota extends Request {

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
			'opsi_kota' => 'required|min:3|max:30|string'
		];
	}

}
