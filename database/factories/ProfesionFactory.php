<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesiones;
use Faker\Generator as Faker;

$factory->define(Profesiones::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3)

    ];
});
