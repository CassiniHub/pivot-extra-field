<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    return [
        'name'  => $faker -> word(),
        'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 1, $max = 15)
    ];
});
