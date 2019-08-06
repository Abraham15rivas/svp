<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Suspension;
use Faker\Generator as Faker;

$factory->define(Suspension::class, function (Faker $faker) {
    return [
        'employee_id'=>Employee::all()->random()->id,
        'supervisor_id'=>Supervisor::all()->random()->id,
        'suspension_date'=> $faker->date($format='d-m-Y', $min='now'),
        'refund_date'=> $faker->date($format='d-m-Y', $min='now'),
        'leftover_days'=> rand(1,30),
        'reason' => $faker->sentence
    ];
});
