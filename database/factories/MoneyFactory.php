<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker) {
    return [
        'currency_id' => App\Entity\Currency::all()->random()->id,

        'amount' => $faker->randomFloat(2, 0, 1000),
        
        'wallet_id' => App\Entity\Wallet::all()->random()->id,
    ];
});
