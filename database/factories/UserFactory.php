<?php

use Faker\Generator as Faker;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        //'userID'  =>    $faker->unique()->rand(100000),
        'email' =>  $faker->unique()->safeEmail,
        'type'  =>  1,
        'foreName'  =>    $faker->firstName,
        'surName'  =>    $faker->lastName,
        'dob'  =>    $faker->date('Y-m-d'),
        'password'  =>    Hash::make('password'),
        'certDate'  =>    $faker->date('Y-m-d'),
        'certExpiry'  =>  $faker->date('Y-m-d', strtotime('+5 years')),
        'orgName'  =>    'temternet',
        //'remember_token' => str_random(10),
    ];   
});
