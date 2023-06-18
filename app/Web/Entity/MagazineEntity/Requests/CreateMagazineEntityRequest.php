<?php

namespace App\Web\Entity\MagazineEntity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMagazineEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|min:2',
            'author' => 'required|exists:authors,id',
            'description' => 'nullable|string',
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
