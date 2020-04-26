<?php

use Faker\Generator as Faker;
use App\Organisation;

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
        'orgName' =>  $faker->lastName,
        'type'  =>  1,
        'lAuth'  =>    $faker->state,
        'licenceNum'  =>    $faker->lastName,
        'licenceDate'  =>    $faker->date('Y-m-d'),
        'licenceExp'  =>  $faker->date('Y-m-d', strtotime('+5 years')),
        //'remember_token' => str_random(10),
    ];   
});
