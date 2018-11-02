<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $id = 1;
        $car = Cars::find($id);
        $year = $car->year;
        $yearUpdate = 2000;
        //Test for user before update
        $this->assertNotEquals($yearUpdate, $year,"Before update");
        $statement = "The year before updating is " .$year. " . ";
        ExampleTest::validate($this,$statement);
        DB::table('cars')
            ->where('id', $id)
            ->update(['year'=>$yearUpdate]);
        $newCar = Cars::find($id);
        $newYear = $newCar->year;
        $this->assertEquals($yearUpdate, $newYear,"After Update");
        $statement = "The car year after updating is ".$newYear.". ";
        ExampleTest::validate($this,$statement);
    }
}
