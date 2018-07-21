<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {

    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);
    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'excerpt' => $faker->sentence(),
        'thumb' => $faker->imageUrl(),
        'updated_at' => $updated_at,
        'created_at' => $created_at,
    ];
});
