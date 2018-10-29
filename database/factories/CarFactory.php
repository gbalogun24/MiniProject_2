<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    $make = array("Honda","Ford","Toyota");
    $hondaModel = array("Accord","Civic","Odyssey","CR-Z","Insight","Element");
    $fordModel = array("Fiesta","Focus","Explorer","GT","Taurus","Ranger");
    $toyotaModel = array("4Runner","Avalon","Camry","Corolla","Highlander","Rav4");
    $randomMake = $faker->randomElement($make);
    if($randomMake =="Honda"){
        $randomModel = $faker->randomElement($hondaModel);
    }
    elseif($randomMake == "Ford"){
        $randomModel = $faker->randomElement($fordModel);
    }
    else{
        $randomModel = $faker->randomElement($toyotaModel);
    }
    return [
        'make'=>$randomMake,
        'model'=>$randomModel,
        'year' => $faker->year()
    ];
});
