<?php

use App\Models\Team;
use App\Models\City;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->city . ' ' . $faker->unique()->company,
        'city_id' => City::inRandomOrder()->first()->id,
        'titles' => $faker->numberBetween(0, 10),
        'logo' => $faker->imageUrl(),
    ];
});
