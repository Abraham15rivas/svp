<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence,
        'acronimo'=> $faker->word
    ];
});
