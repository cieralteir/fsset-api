<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'name' => $faker->uuid,
    ];
});
