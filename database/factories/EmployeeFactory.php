<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Employee;
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

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstName' => $faker->name,
        'middleName' => $faker->name,
        'lastName' => $faker->name,
        'employee_admission_no'=>$faker->numberBetween(1,10),
        'employee_ID_number'=>$faker->numberBetween(1,5),
        'Passport_number'=>$faker->numberBetween(1,5),
        'Nationality'=>$faker->text,
        'Department_id'=>$faker->numberBetween(1,5),
        'BirthDate'=>$faker->dateTime,
        'position_id' =>$faker->numberBetween(1, 8),
        'Profession_id' =>$faker->numberBetween(1, 8),
        'Date_of_work' => $faker->dateTime,
        'Work_start_date' => $faker->dateTime,
        'avatar' =>$faker->image(public_path("storage/images"),640,480, null, false),
        'salary'=>$faker->numberBetween(1,100),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'Phone'=>$faker->phonenumber,
        'Mobile'=>$faker->phonenumber,
        'Soical_Status'=>$faker->text,
        'password' =>bcrypt(123456),
        'gender' =>1,
        'address'=>$faker->address,
        'remember_token' => Str::random(10),

    ];
});
