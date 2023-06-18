<?php

namespace App\Web\Entity\BookEntity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|min:2',
            'description' => 'nullable|string',
            'isbn' => 'required|string|unique:entities,isbn,'.$this->entity->id,
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
