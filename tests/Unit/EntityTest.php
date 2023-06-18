<?php

namespace Tests\Unit;

use App\Core\Author\Author;
use App\Core\Entity\BookEntity\BookEntity;
use App\Core\Entity\Entity;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EntityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();

        $author = Author::factory()->create();

        $bookEntity = new BookEntity();
        $bookEntity->fill([
            'name' => 'TestBookEntity',
            'isbn' => '123456789123'
        ]);
        $bookEntity->author()->associate($author);
        $bookEntity->save();
    }

    public function test_single_table_inheritance_entity_created_successfully(): void {
        $this->assertDatabaseHas('entities', [
            'type' => 'book',
        ]);
    }
    
    public function test_single_table_inheritance_entity_read_successfully(): void {
        $entity = Entity::first();
        $this->assertTrue($entity instanceof BookEntity);
    }
}
