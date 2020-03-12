<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Admin;
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

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'middleName'=>$faker->name,
        'lastName' => $faker->lastName,
        'Birthdate'=>$faker->dateTime,
        'employee_admission_no'=>$faker->numberBetween(2,8),
        'employee_ID_number'=>$faker->randomDigit,
        'Passport_number'=>$faker->randomDigit,
        'Nationality'=>$faker->text,
        'gender'=>1,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>bcrypt(123456),
        'phone'=> $faker->phoneNumber,
        'Mobile'=> $faker->phoneNumber,
        'Soical_Status'=>$faker->text,
        'Date_of_work'=>$faker->dateTime,
        'Work_start_date'=>$faker->dateTime,
        'avatar'=>$faker->image(public_path("storage/images"),640,480, null, false),
        'salary'=>$faker->numberBetween(500,800),
        'address'=>$faker->address,
        'remember_token' => Str::random(10),
    ];
});
