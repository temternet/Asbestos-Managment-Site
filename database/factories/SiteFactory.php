<?php

use Faker\Generator as Faker;
use App\Site;

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

$factory->define(App\Site::class, function (Faker $faker) {
    return [
        //'userID'  =>    $faker->unique()->rand(100000),
        'addressL1' =>  $faker->streetAddress,
        'addressL2'  =>   $faker->secondaryAddress,
        'town'  =>    $faker->city,
        'county'  =>    $faker->state,
        'postCode'  =>    $faker->postcode,
        'lAuth'  =>    $faker->state,
        //'remember_token' => str_random(10),
    ];   
});
