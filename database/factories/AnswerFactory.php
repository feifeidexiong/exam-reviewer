<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        'answer' => $faker->text(50),
        'is_correct' => false
    ];
});
