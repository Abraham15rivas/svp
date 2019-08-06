<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserDay;
use Faker\Generator as Faker;
use App\User;

$factory->define(UserDay::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random()->id,
        'available_days'=>rand(0,100)
    ];
});
