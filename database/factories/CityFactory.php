<?php

use App\Models\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'state' => $faker->state,
        'division_id' => $faker->numberBetween(1, 8), // Assuming 8 divisions exist
        // Assuming you also want to link to conferences
        'conference_id' => $faker->numberBetween(1, 2), // Assuming 2 conferences exist
    ];
});
