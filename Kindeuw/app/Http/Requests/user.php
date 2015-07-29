<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class user extends Request {

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
			'nama' => 'required|min:3|max:35|string',
			'username' => 'required|min:5|max:20',
			'email' => 'required|max:30|unique:user',
			'password' => 'required|max:20',
			'repassword' => 'required|same:password'
		];
	}

}
