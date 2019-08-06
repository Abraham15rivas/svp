<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Permit;
use Faker\Generator as Faker;
use App\Reason;

$factory->define(Permit::class, function (Faker $faker) {
    return [
        'employee_id'=>Employee::all()->random()->id,
        'supervisor_id'=>Supervisor::all()->random()->id,
        'directorl_id'=>LineDirector::all()->random()->id,
        'directorg_id'=>ManagingDirector::all()->random()->id,
        'start_date'=> $faker->date($format='d-m-Y', $min='now'),
        'end_date'=> $faker->date($format='d-m-Y', $min='now'),
        'reason_id'=> Reason::all()->random()->id,
        'days'=> rand(1,30),
        'turn'=>$faker->randomElement(['c','m','t']),
        'permit_type'=>$faker->randomElement(['Remunerado','No remunerado']),
        'substitute_require'=> rand(0,1),
        'observation'=> $faker->sentence(),
        'state'=> $faker->randomElement([Advance::PROCESO, Advance::RECHAZADO,Advance::APROBADO,Advance::VISTO])
    ];
});
