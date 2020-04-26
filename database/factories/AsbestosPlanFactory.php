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
        'planID' =>  1,
        'premisesID'  =>  1,
        'creationDate'  =>    $faker->date('Y-m-d'),
        'monitorDate'  =>    $faker->date('Y-m-d'),
        'userID'  =>  1,
        'commPlan'  =>    'there is not one currently',
        //'remember_token' => str_random(10),
    ];   
});
