<?php namespace Kindeuw\Http\Requests;

use Kindeuw\Http\Requests\Request;

class Genre extends Request {

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
			'opsi_genre' => 'required|min:3|max:20'
		];
	}

}
