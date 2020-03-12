<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Mark;
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
$factory->define(Mark::class,function(Faker $faker){
return[
    'courses_id'=>$faker->numberBetween(1,10),
    'first_exam'=>$faker->name,
    'mark_of_first_exam'=>$faker->numberBetween(25,50),
    'second_exam'=>$faker->name,
    'mark_of_sec_exam'=>$faker->numberBetween(25,50),
    'third_exam'=>$faker->name,
    'mark_of_third_exam'=>$faker->numberBetween(25,50),
    'final_exam'=>$faker->name,
    'mark_of_final_exam'=>$faker->numberBetween(50,100),
    'activity_Of_stu'=>$faker->name,
    'mark_of_activity'=>$faker->numberBetween(25,40),
    'courses_id'=>$faker->numberBetween(1,10),



];
});
