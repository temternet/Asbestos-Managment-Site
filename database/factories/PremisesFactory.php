<?php

use Faker\Generator as Faker;
use App\Premises;

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

$factory->define(App\Premises::class, function (Faker $faker) {
    return [
        //'userID'  =>    $faker->unique()->rand(100000),
        'siteID'  =>  1,
        'userID'  =>    1,
        'orgID'  =>    1,
        'premisesAdr'  =>    $faker->secondaryAddress,
        //'remember_token' => str_random(10),
    ];   
});
