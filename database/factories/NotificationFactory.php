<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Notification;
use Faker\Generator as Faker;
use App\User;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'origin_id'=>User::all()->random()->id,
        'destination_id'=>User::all()->random()->id,
        'description'=>$faker->sentence
    ];
});
