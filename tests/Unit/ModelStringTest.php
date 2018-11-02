<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelString()
    {
        $id = Cars::inRandomOrder()->first()->id;
        $model = DB::table('cars')->where('id',$id)->value('model');
        $checkString = is_string($model);
        if($checkString == true){
            $this->assertEquals(true,$checkString);
            $statement = "The model " .$model. " is a string. ";
            ExampleTest::validate($this,$statement);
        }
        else{
            self::printStatement($model." is not a string");
        }
    }
}
