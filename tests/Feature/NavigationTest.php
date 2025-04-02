<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads_successfully()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_donations_page_is_accessible()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/donations');
        $response->assertStatus(200);
    }

    public function test_charity_map_page_is_accessible()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/charities');
        $response->assertStatus(200);
    }
}


