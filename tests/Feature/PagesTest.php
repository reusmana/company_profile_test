<?php

namespace Tests\Feature;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testPagesCreate(): void
    {
        $page = Page::create([
            'title' => 'Test Page',
            'content' => 'This is a test content',
        ]);

        $this->assertDatabaseHas('pages', ['title' => 'Test Page']);
    }

    public function testPages(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
