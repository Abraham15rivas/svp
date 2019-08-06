<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Area;
use Faker\Generator as Faker;
use App\Office;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'office_id'=> Office::all()->random()->id,
        'name'=> $faker->sentence
    ];
});
