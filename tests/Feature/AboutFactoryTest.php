<?php

namespace Tests\Feature;

use App\Models\About;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutFactoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_factory_creates_fifty_about_records(): void
    {
        $abouts = About::factory(50)->create();

        $this->assertCount(50, $abouts);
        $this->assertDatabaseCount('abouts', 50);
    }
}
