<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterExists()
    {
        $response = $this->get('/register');
        $statement = "Register page found";
        $response->assertStatus(200);
        self::validate($response,$statement);
    }
    public function testLoginExists()
    {
        $response = $this->get('/login');
        $statement = "Login page found";
        $response->assertStatus(200);
        self::validate($response,$statement);
    }

    public static function validate($response, $statement){
        if($response){
            print $statement;
        }
    }
}
