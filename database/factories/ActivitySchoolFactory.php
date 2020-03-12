<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Models\ActivitySchool;

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
$factory->define(ActivitySchool::class, function(Faker $faker){
return[
    'title'=>$faker->text,
    'description'=>$faker->text,
    'avatar'=>$faker->image(public_path("storage/images"),640,480, null, false),
    'classes_id'=>$faker->numberBetween(1,12),
    'teacher_id'=>$faker->numberBetween(1,19),

];



});