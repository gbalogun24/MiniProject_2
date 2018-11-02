<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $id = 2;
        //Test for user before update
        $cars = Cars::all();
        $carsCount = count($cars);
        //Test for count before insert
        $this->assertEquals(51, $carsCount,"Before delete");
        $statement = "The count before delete is " .$carsCount. " . ";
        ExampleTest::validate($this,$statement);
        DB::table('cars')
            ->where('id', $id)
            ->delete();
        $newCars = Cars::all();
        $newCarsCount = count($newCars);
        $this->assertEquals(50, $newCarsCount,"After delete");
        $statement = "The count after delete is ".$newCarsCount.". ";
        ExampleTest::validate($this,$statement);
    }
}
