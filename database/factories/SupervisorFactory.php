<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Supervisor;
use Faker\Generator as Faker;
use App\User;
use App\Area;

$factory->define(Supervisor::class, function (Faker $faker) {
    return [
        'user_id'=> User::all()->random()->id,
        'area_id'=> Area::all()->random()->id
    ];
});
