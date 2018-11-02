<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {   $users = User::all();
        //Test for count before insert
        $this->assertEquals(65, count($users),"Before insert");
        $statement = "The count before insert is " .count($users). " . ";
        ExampleTest::validate($this,$statement);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        $newusers = User::all();
        $this->assertEquals(66, count($newusers),"After Insert");
        $statement = "The count after insert is ".count($newusers).". ";
        ExampleTest::validate($this,$statement);
    }
}
