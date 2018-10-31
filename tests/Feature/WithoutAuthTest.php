<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class WithoutAuthTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testAboutExists()
    {
        $response = $this->get('/about');
        $statement = "About page found";

        $response->assertStatus(200);
        ExampleTest::validate($response,$statement);
    }

    }

