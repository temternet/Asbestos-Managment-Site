<?php

use Faker\Generator as Faker;
use App\AsbestosRecord;

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

$factory->define(App\AsbestosRecord::class, function (Faker $faker) {
    return [
        //'userID'  =>    $faker->unique()->rand(100000),
        'asbestosID' => 1,
        'premisesID' => 1,
        'location' => 'roof',
        'product' => 'cement',
        'area' => '2m squared',
        'surfaceCoating' => 'paint',
        'asbestosCondition' => 'dammaged',
        'accessibility' => 'poor',
        'asbestosType' => 'crox',
        'comments' => 'n/a',
        'materialScore' => 12,
        'priorityScore' => 13,
        'planID' => 1,
        'action' => 'leave it for now',
        'actionDate' => $faker->date('Y-m-d'),
        'deligate' => $faker->name,
        //'remember_token' => str_random(10),
    ];   
});
