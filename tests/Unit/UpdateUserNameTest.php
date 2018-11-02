<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class UpdateUserNameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {   $user = User::find(1);
        $name = $user->name;
        //Test for user before update
        $this->assertNotEquals("Steve Smith", $name,"Before update");
        $statement = "The name of the user before updating is " .$name. " . ";
        ExampleTest::validate($this,$statement);
        DB::table('users')
            ->where('id', $user->id)
            ->update(['name'=>"Steve Smith"]);
        $newuser = User::find(1);
        $newuserName = $newuser->name;
        $this->assertEquals("Steve Smith", $newuserName,"After Update");
        $statement = "The name of the user after updating is ".$newuserName.". ";
        ExampleTest::validate($this,$statement);
    }
}
