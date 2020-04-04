<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title'             => $faker->title,
        'description'       => $faker->description,
        'image'             => $faker->image,
        'price'             => $faker->price
    ];
});
