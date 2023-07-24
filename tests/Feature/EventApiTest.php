<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventApiTest extends TestCase
{
    use RefreshDatabase;

    public function testListEventsEndpoint()
    {
        // Send a GET request to the /api/list endpoint
        $response = $this->get('/api/list');

        // Assert that the response status code is 200 (OK)
        $response->assertStatus(200);
    }
}
