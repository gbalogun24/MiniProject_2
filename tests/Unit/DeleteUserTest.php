<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {   $userID = User::find(1)->id;
        $users = User::all();
        $count = count($users);
        //Test for count before delete
        $this->assertEquals(50, $count,"Before delete");
        $statement = "The count before delete is " .$count. " . ";
        ExampleTest::validate($this,$statement);
        DB::table('users')
            ->where('id', $userID)
            ->delete();
        $newusers = User::all();
        $newcount = count($newusers);
        $this->assertEquals(49, $newcount,"After Insert");
        $statement = "The count after delete is ".$newcount.". ";
        ExampleTest::validate($this,$statement);
    }
}
