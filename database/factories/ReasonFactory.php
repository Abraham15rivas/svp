<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Reason;
use Faker\Generator as Faker;

$factory->define(Reason::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence()
    ];
});
