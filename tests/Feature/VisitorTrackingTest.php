<?php

namespace Tests\Feature;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VisitorTrackingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itInitializesVisitorCountToZero()
    {
        $page = Page::create([
            'title' => 'Test Page',
            'content' => 'This is a test content',
        ]);

        $this->assertEquals(0, $page->visitors);
    }

    /** @test */
    public function itIncrementsVisitorCount()
    {
        $pages = Page::create([
            'title' => 'Test Page',
            'content' => 'This is a test content',
        ]);
        $page = Page::find($pages->id);

        $page->visitors = $page->visitors + 1;
        $page->save();

        $this->assertEquals(1, $page->visitors);
    }
}
