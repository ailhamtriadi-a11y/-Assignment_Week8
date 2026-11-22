<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFactoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_factory_creates_fifty_contact_records(): void
    {
        $contacts = Contact::factory(50)->create();

        $this->assertCount(50, $contacts);
        $this->assertDatabaseCount('contacts', 50);
    }
}
