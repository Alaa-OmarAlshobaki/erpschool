<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Student;
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

$factory->define(Student::class, function (Faker $faker) {
    return [
        'student_admission_no'=>$faker->numberBetween(1, 10),
        'student_admission_date'=>$faker->dateTime,
        'student_firstname' => $faker->name,
        'student_middlename' => $faker->name,
        'student_lastname'=>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>bcrypt(123456),
        'phone'=>$faker->phonenumber,
        'gender'=>1,
        'city'=>$faker->text,
        'state'=>$faker->text,
        'street'=>$faker->text,
        'placeOfBirth'=>$faker->address,
        'ID_number'=>$faker->numberBetween(1,10),
        'statuse'=>0,
        'avatar' =>$faker->image(public_path("storage/images"),640,480, null, false),
        'guardians_id'=>$faker->numberBetween(2,19),
        'remember_token' => Str::random(10),
    ];
});
