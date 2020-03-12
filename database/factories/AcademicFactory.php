<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Academic;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Academic::class, function (Faker $faker) {
    return [
        'Start_Year' => $faker->dateTime, 
        'Start_Month' =>$faker->dateTime,
        'End_Year' => $faker->dateTime,
        'End_Month' => $faker->dateTime,
        'status' =>1,
        'institution_id'=>$faker->numberBetween(1, 1),
      
    ];
});
