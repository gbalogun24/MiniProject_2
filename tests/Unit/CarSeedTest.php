<?php

namespace Tests\Feature;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarSeedTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarSeed()
    {
        $seedCount = 50;
        $cars = Cars::all();
        $carsCount = count($cars);
        $this->assertEquals($carsCount, $carsCount,"Before seeding");
        $statement = "The count before seeding is " .$carsCount. " . ";
        ExampleTest::validate($this,$statement);
        factory(Cars::class, $seedCount)->create();
        $newCars = Cars::all();
        $newCarsCount = count($newCars);
        $this->assertEquals($seedCount, ($newCarsCount - $carsCount),"After seeding");
        $statement = "The total number records is ".$newCarsCount.". The number of records inserted by DB seed is " .$seedCount. " . ";
        ExampleTest::validate($this,$statement);
    }
}
