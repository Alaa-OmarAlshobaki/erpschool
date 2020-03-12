<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Course;
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
$factory->define(Course::class,function(Faker $faker){
    return[
        'image'=>fa
        'Course_Name'=>$faker->name,
        'description'=>$faker->text,
        'code'=>$faker->numberBetween(100,500),
        'Total_Working_Hours'=>$faker->numberBetween(500,900),
        'classes_id'=>$faker->numberBetween(1,10),
        

    ];
});