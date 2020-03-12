<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory  */
use App\Models\Timetable;
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
$factory->define(Timetable::class,function(Faker $faker){
return[
    'date'=>$faker->dateTime,
    'time'=>$faker->dateTime,
    'room'=>$faker->text,
    'code'=>$faker->text,
    'lead_teacher'=>$faker->text,
    'classes_id'=>$faker->numberBetween(1,12)


];
});