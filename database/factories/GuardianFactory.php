<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Guardian;
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

$factory->define(Guardian::class, function (Faker $faker) {
    return [
        'fnameForFather' => $faker->firstName,
        'lnameForFather' => $faker->lastName,
        'fnameForMother' => $faker->firstName,
        'lnameForMother' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>bcrypt(123456),
        'city'=>$faker->text,
        'state'=>$faker->text,
        'street'=>$faker->text,
        'ID_number_Father'=>$faker->numberBetween(1,10),
        'ID_number_Mather'=>$faker->numberBetween(1,10),
        'placeOfBirthMather'=>$faker->address,
        'placeOfBirthFather'=>$faker->address,
        'birthdateForMa'=>$faker->dateTime,
        'birthdateForFa'=>$faker->dateTime,
        'fatherJob'=>$faker->text,
        'motherJob'=>$faker->text,
        'qualificationFather'=>$faker->text,
        'qualificationMather'=>$faker->text,
        'Average_year_income'=>$faker->numberBetween(1,10),
        'phone'=>$faker->phonenumber,
        'mobile'=>$faker->phonenumber,
        'remember_token' => Str::random(10),
    ];
});
