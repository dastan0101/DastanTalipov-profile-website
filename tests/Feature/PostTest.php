<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
    }


    public function test_client_id_get_request() {
        $response = $this->get('/client/1');
        $response->assertStatus(200);
    }


    public function test_get_unexisted_client() {
        $response = $this->get('/client/1000');
        $response->assertStatus(404);
    }

    public function test_client_response() {
        $response = $this->get('/client/1000');
        $response->assertStatus(404);
    }
}
