<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Activity;
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
$factory->define(Activity::class,function(Faker $faker){
return[
'courses_id'=>$faker->numberBetween(1,10),
'nama_activity'=>$faker->name,
'Performance_evaluation'=>$faker->text,
'mark'=>$faker->numberBetween(25,50),
    
];
});