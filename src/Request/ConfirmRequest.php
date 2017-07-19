<?php

namespace BePark\Libs\Confirm\Requests;

class ConfirmRequest extends \Illuminate\Foundation\Http\FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'confirm' => 'accepted'
		];
	}
}
