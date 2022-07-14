<?php

use App\Models\Favorite;
use Faker\Generator as Faker;

$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->realText,
        'user_id' => $this->faker->numberBetween(1,3),
    ];
});
