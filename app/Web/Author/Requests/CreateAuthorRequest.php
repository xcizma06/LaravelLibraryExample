<?php

namespace App\Web\Author\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAuthorRequest extends FormRequest {
	public function rules(): array {
		return [
            'name' => 'required|string|min:2',
            'surname' => 'required|string|min:2',
            'email' => 'email|unique:users',
		];
	}

	public function authorize(): bool {
		return true;
	}
}
