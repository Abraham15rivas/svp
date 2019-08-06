<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Holiday;
use Faker\Generator as Faker;
use App\Employee;
use App\Supervisor;
use App\LineDirector;
use App\ManagingDirector;

$factory->define(Holiday::class, function (Faker $faker) {
    return [
        'employee_id'=>Employee::all()->random()->id,
        'supervisor_id'=>Supervisor::all()->random()->id,
        'directorl_id'=>LineDirector::all()->random()->id,
        'directorg_id'=>ManagingDirector::all()->random()->id,
        'available_days'=>30,
        'enjoyed_days'=>0,
        'leftover_days'=>30,
        'period'=>$faker->randomElement(['2010-2011','2011-2012','2012-2013','2013-2014','2014-2015','2015-2016','2016-2017']),
        'start_date'=> $faker->date($format='d-m-Y', $max='now'),
        'end_date'=> $faker->date($format='d-m-Y', $min='now'),
        'refund_date'=> $faker->date($format='d-m-Y', $min='now'),
        'state'=> $faker->randomElement([Holiday::PROCESO, Holiday::RECHAZADO,Holiday::APROBADO,Holiday::VISTO])
    ];
});
