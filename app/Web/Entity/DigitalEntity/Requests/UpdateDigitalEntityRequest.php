<?php

namespace App\Web\Entity\DigitalEntity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDigitalEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|min:2',
            'description' => 'nullable|string',
            'url' => 'nullable|string',
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
