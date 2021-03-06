<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class login extends Request {

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
			'email' => 'required|min:10|max:30',
			'password' => 'required|min:6|max:30'
		];
	}

}
