<?php

namespace App\Web\Entity\BookEntity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|min:2',
            'author' => 'required|exists:authors,id',
            'description' => 'nullable|string',
            'isbn' => 'required|string|unique:entities',
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
