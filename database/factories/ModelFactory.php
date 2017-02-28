<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('testtest'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['m', 'f', 'u']),
        'resident_address' => $faker->address,
        'contact_address' => $faker->address,
        'email_address' => $faker->safeEmail,
        'mobile_phone' => $faker->phoneNumber,
        'id_number' => $faker->randomNumber,
        'date_of_issue' => $faker->date,
        'place_of_issue' => $faker->state,
        'marital_status' => $faker->randomElement(['s', 'm', 'u']),
        'tax_code_number' => $faker->randomNumber,
    ];
});
