<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Performance_Evaluation;
use Faker\Generator as Faker;
use Illumnaite\Support\Str;
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
$factory->define(Performance_Evaluation::class,function(Faker $faker){
return[
    'courses_id'=>$faker->numberBetween(1,10),
    'topic'=>$faker->text,
    'good'=>1,
    'vgood'=>0,
    'Excellent'=>0,
];
});