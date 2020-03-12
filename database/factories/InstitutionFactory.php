<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Institution;
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

$factory->define(Institution::class, function (Faker $faker) {
    return [
    
        'Institution_Name' => $faker->unique()->name,
        'Institution_Address' =>$faker->Address,
        'Institution_Email'=> $faker->unique()->safeEmail,
        'Institution_Phone' =>$faker->unique()->phonenumber,
        'Institution_Mobile' =>$faker->unique()->phonenumber,
        'Institution_Fax' =>$faker->unique()->phonenumber,
        'admin_id' =>1,
        'Country' =>$faker->word,
        'Currency_Type' =>$faker->Country,
        'language' =>$faker->word, 
        'Institution_Code' => $faker->word,
        'code'=>1,
        'logo' =>$faker->image(public_path("storage/images"),640,480, null, false),
        'Timezone' => $faker->dateTime,
       

      
    ];
});
