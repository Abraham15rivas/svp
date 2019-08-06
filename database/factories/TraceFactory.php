<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Trace;
use Faker\Generator as Faker;
use App\User;

$factory->define(Trace::class, function (Faker $faker) {
    return [
        'user_id'=> User::all()->random()->id,
        'type'=> $faker->randomElement(Trace::PERMIT,Trace::HOLIDAY),
        'description'=>$faker->sentence
    ];
});
