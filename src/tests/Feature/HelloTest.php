<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Unit\TestCase;

class HelloTest extends TestCase
{
  public function test_hello()
  {
    $this->assertTrue(true);

    $response = $this->get('/');
    $response->assertStatus(200);

    $response = $this->get('/no_route');
    $response->assertStatus(404);
  }
}