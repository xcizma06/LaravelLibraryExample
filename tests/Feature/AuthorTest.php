<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();

        $this->post('/authors/create', [
            'name' => 'Test',
            'surname' => 'Test',
            'email' => 'test@test.com'
        ]);
    }

    public function test_author_create_view_is_renderable(): void {
        $response = $this->get('/authors/create');
        $response->assertStatus(200);
    }
    
    public function test_author_create_request_creates_new_author(): void {
        $this->assertDatabaseHas('authors', [
            'email' => 'test@test.com'
        ]);
    }

    public function test_new_author_displays_in_author_list(): void {
        $response = $this->get('/authors');
        $response->assertSee('test@test.com');
    }

    public function test_error_messages_are_displayed_on_invalid_request(): void {
        $response = $this->followingRedirects()->post('/authors/create', [
            'name' => 'Test',
            'surname' => 'Test',
            'email' => 'test@test.com'
        ]);

        $response->assertSee(__('The email has already been taken.'));
    }
}
