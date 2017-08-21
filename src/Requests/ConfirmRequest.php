<?php

namespace BePark\Libs\Confirm\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmRequest extends FormRequest
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
