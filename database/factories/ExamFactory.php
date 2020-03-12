<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Exam;
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
$factory->define(Exam::Class,function(Faker $faker){
    return [
        'courses_id'=>$faker->numberBetween(1,10),
        'date'=>$faker->dateTime,
        'time'=>$faker->datetime,
        'name_of_exam'=>$faker->name,
        'max_of_mark'=>$faker->numberBetween(25,50),
        'min_of_mark'=>$faker->numberBetween(5,25),
    ];

});