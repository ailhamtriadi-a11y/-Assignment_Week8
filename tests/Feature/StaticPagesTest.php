<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaticPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_about_page_displays_profile_data_passed_by_its_route(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('Andra Ilham Triadi Mijaya')
            ->assertSee('2086022510016')
            ->assertSee('Informatika - AI');
    }

    public function test_contact_page_displays_contact_data_passed_by_its_route(): void
    {
        Contact::factory()->create(['username' => 'Rejevdh']);
        Contact::factory()->create(['username' => 'ailhamtriadi a11y']);
        Contact::factory()->create(['username' => '19i28/Quwte']);

        $this->get('/contact')
            ->assertOk()
            ->assertSee('Rejevdh')
            ->assertSee('ailhamtriadi a11y')
            ->assertSee('19i28/Quwte');
    }
}
