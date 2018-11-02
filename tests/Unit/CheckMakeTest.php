<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckMake()
    {
        $id = Cars::inRandomOrder()->first()->id;
        $make = DB::table('cars')->where('id',$id)->value('make');
        if(strcasecmp($make,"Honda") == 0){
            $this->assertEquals("Honda",$make);
            $statement = "The car is the correct make: " .$make;
            ExampleTest::validate($this,$statement);
        }
        else if(strcasecmp($make,"Ford") == 0){
            $this->assertEquals("Ford",$make);
            $statement = "The car is the correct make: " .$make;
            ExampleTest::validate($this,$statement);
        }
        else if(strcasecmp($make,"Toyota") == 0){
            $this->assertEquals("Toyota",$make);
            $statement = "The car is the correct make: " .$make;
            ExampleTest::validate($this,$statement);
        }
        else{
            YearIntTest::printStatement($make." is not the correct make");
        }
    }
}
