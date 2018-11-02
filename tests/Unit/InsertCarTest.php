<?php

namespace Tests\Feature;

use App\Cars;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $cars = Cars::all();
        $carsCount = count($cars);
        //Test for count before insert
        $this->assertEquals(50, $carsCount,"Before insert");
        $statement = "The count before insert is " .$carsCount. " . ";
        ExampleTest::validate($this,$statement);
        DB::table('cars')->insert([
            'make' => "Ford",
            'model' => "GT",
            'year' => 2018,
        ]);
        $newCars = Cars::all();
        $newCarsCount = count($newCars);
        $this->assertEquals(51, $newCarsCount,"After Insert");
        $statement = "The count after insert is ".$newCarsCount.". ";
        ExampleTest::validate($this,$statement);
    }
}
