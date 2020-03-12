<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Syllabuses;
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
$factory->define(Syllabuses::class,function(Faker $faker){
return[
    'Syllabus_Name'=>$faker->name,
    'courses_id'=>$faker->numberBetween(1,10),
    'date'=>$faker->dateTime,
    'topic'=>$faker->text,
    'due_on_this_date'=>$faker->text,
    'description'=>$faker->text,
];
});