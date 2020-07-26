<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderItem\OrderItem;
use App\Models\Order\Order;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'price_per_unit' => $faker->randomFloat(2, 0, 100),
        'quantity' => $faker->randomNumber(1),
        'product' => $faker->company,
    ];
});
