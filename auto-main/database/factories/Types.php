<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'type' => rand(1, 4)
    ];
});
