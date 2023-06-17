<?php

namespace Database\Seeders;

use App\Core\Author\Author;
use App\Core\Entity\Entity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder 
{
    public function run(): void {
        Author::factory(40)->create();
        Entity::factory(40)->create();
    }
}
