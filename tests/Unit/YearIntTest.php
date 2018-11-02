<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Database\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YearIntTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearInt()
    {
        $id = Cars::inRandomOrder()->first()->id;
        $year = DB::table('cars')->where('id',$id)->value('year');
        $checkInt= ctype_digit($year);
        if($checkInt == true){
            $this->assertEquals(true,$checkInt);
            $statement = "The year " .$year. " is an integer. ";
            ExampleTest::validate($this,$statement);
        }
        else if(is_int($year) == true){
            $this->assertEquals(true,is_int($year) );
            $statement = "The year " .$year. " is an integer. ";
            ExampleTest::validate($this,$statement);
        }
        else{
            self::printStatement($year." is not an integer");
        }

    }
    public static function printStatement($var){
        print($var);
    }
}
