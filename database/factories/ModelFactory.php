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

$factory->define(App\Autor::class, function (Faker\Generator $faker) {
    return [
        'genero' => $gender = $faker->randomElement(['masculino', 'femenino']),
        'nombre' => $faker->name($gender),
        'pais' => $faker->country,
    ];
});
