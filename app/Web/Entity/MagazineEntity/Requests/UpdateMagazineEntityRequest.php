<?php

namespace App\Web\Entity\MagazineEntity\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMagazineEntityRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|min:2',
            'description' => 'nullable|string',
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
