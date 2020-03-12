<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Attendes;
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
$factory->define(Attendes::class,function(Faker $faker){
return [

    'attend'=>1,
    'date'=>$faker->dateTime,
    'students_id'=>$faker->numberBetween(1,10),

       ];
});