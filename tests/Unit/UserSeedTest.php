<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSeedTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserSeed()
    {
        $seedCount = 50;
        $users = User::all();
        $usersCount = count($users);
        $this->assertEquals($usersCount, $usersCount,"Before seeding");
        $statement = "The count before seeding is " .$usersCount. " . ";
        ExampleTest::validate($this,$statement);
        factory(User::class, $seedCount)->create();
        $newUsers = User::all();
        $newUsersCount = count($newUsers);
        $this->assertEquals($seedCount, ($newUsersCount - $usersCount),"After seeding");
        $statement = "The total number records is ".$newUsersCount.". The number of records inserted by DB seed is " .$seedCount. " . ";
        ExampleTest::validate($this,$statement);
    }
}
