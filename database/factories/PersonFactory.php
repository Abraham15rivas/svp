<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'card_id'=>$faker->numberBetween($min = 10000000, $max = 99999999),
        'extension'=>$faker->numberBetween($min = 1000, $max = 9000),
        'phone'=>$faker->phoneNumber(),
        'date_admission'=> $faker->date($format='Y-m-d', $max='now', $min='01-01-2010')
    ];
});
