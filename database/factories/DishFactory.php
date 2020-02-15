<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;
//$faker = \Faker\Factory::create();
//$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

$factory->define(dish::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('dessert ###'),
        'price' => $faker->randomNumber(2),
        'catogry'=>'dessert'
    ];
});
