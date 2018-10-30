<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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


    function validate($response, $statement){
        if($response){
            print $statement;
        }
    }
}
