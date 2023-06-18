<?php

namespace App\Web\Entity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'search' => 'nullable|string|min:2',
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
