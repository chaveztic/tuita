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

$factory->define(Tuita\Models\User::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'email' => $faker->email,
        'username' => $faker->name,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
