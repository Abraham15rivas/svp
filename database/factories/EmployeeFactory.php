<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;
use App\User;
use App\Office;
use App\Area;
use App\Role;

$factory->define(Employee::class, function (Faker $faker) {
    $user = User::where('role_id',Role::EMPLEADO)->get('id');
    return [
        'user_id'=> $user,
        'office_id'=> Office::all()->random()->id,
        'area_id' => Area::all()->random()->id
    ];
});
