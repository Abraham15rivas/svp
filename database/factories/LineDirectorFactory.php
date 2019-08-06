<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LineDirector;
use Faker\Generator as Faker;
use App\User;
use App\Office;

$factory->define(LineDirector::class, function (Faker $faker) {
    return [
        'user_id'=> User::all()->random()->id,
        'office_id'=> Office::all()->random()->id,
    ];
});
