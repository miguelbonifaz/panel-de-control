<?php

use Faker\Generator as Faker;
use App\Profesiones;

$factory->define(Profesiones::class, function (Faker $faker) {
    return [
        'profesion' => $faker->sentence(1)
    ];
});
