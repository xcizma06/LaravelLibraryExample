<?php

namespace Database\Factories;

use App\Core\Author\Author;
use App\Core\Entity\Entity;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityFactory extends Factory  
{
    protected $model = Entity::class;

    public function definition(): array {
        $type = fake()->randomElement(['book', 'magazine', 'digital']);
        $author = Author::inRandomOrder()->first() ?? Author::factory()->create();

        $fields = [
            'name' => fake()->text(20),
            'description' => fake()->text(200),
            'author_id' => $author->id,
            'type' => $type
        ];

        return match ($type) {
            'book' => array_merge($fields, [
                'isbn' => fake()->ean13()
            ]),
            'magazine' => $fields,
            'digital' => array_merge($fields, [
                'url' => fake()->url()
            ]),
            default => $fields
        };
    }
}
