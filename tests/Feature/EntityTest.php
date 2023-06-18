<?php

namespace Tests\Feature;

use App\Core\Author\Author;
use App\Core\Entity\DigitalEntity\DigitalEntity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EntityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();

        $author = Author::factory()->create();

        $this->post('/entities/digital/create', [
            'name' => 'TestDigital',
            'url' => 'testdigital.com',
            'author' => $author->id
        ]);
    }

    public function test_entity_create_views_are_renderable(): void {
        $response = $this->get('/entities/book/create');
        $response->assertStatus(200);
        
        $response = $this->get('/entities/digital/create');
        $response->assertStatus(200);
        
        $response = $this->get('/entities/magazine/create');
        $response->assertStatus(200);
    }
    
    public function test_digital_entity_create_request_creates_new_digital(): void {
        $this->assertDatabaseHas('entities', [
            'type' => 'digital'
        ]);
    }

    public function test_new_entity_displays_in_entity_list(): void {
        $response = $this->get('/entities');
        $response->assertSee('Test');
    }

    public function test_entity_search_request_working_as_intended(): void {
        $response = $this->get('/entities', [
            'search' => 'Te',
        ]);

        $response->assertSee('Test');
    }
    
    public function test_delete_entity(): void {
        $entity = DigitalEntity::first();
        $response = $this->followingRedirects()->delete('/entities/digital/' . $entity->id . '/delete');
        $response->assertStatus(200);

        $this->assertDatabaseMissing('entities', [
            'name' => 'TestDigital'
        ]);
    }
}
