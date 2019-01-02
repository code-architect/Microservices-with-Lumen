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

$factory->define(App\Models\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'description' => $faker->sentence(8, true),
        'price' => $faker->numberBetween(25, 150),
        'author_id' => $faker->numberBetween(1, 50),
    ];
});
