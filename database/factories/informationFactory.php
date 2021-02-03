<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Information;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Information::class, function (Faker $faker) {


    return [
        'post_id' => $faker->numberBetween( 1 , 200),
        'description' => $faker->paragraph(),
        'slug' => $faker->slug(),
    ];
});


