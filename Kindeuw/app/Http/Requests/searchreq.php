<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class searchreq extends Request {

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
			'cari1'=>'required|not_in:0'
		];
	}

}
