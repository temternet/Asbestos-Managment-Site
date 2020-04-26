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
        'dob'  =>    $faker->date('d-m-Y'),
        'password'  =>    Hash::make('password'),
        'certDate'  =>    $faker->date('d-m-Y'),
        'certExpiry'  =>  $faker->date('d-m-Y', strtotime('+5 years')),
        'orgID'  =>    1,
        //'remember_token' => str_random(10),
    ];   
});
