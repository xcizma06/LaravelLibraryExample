<?php

namespace Database\Factories;

use App\Core\Author\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory  
{
    protected $model = Author::class;

    public function definition(): array {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
