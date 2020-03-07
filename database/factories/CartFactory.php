<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'c_produit_id'=>$faker->numberBetween(1,3),
        'c_produit_libelle' => $faker->sentence(2,true), 
        'c_produit_price' => $faker->randomFloat(2, 0, 1),
        'c_produit_quantite' =>  $faker->numberBetween(1,5),
        'user_email' =>  $faker->email,
        'session_id' =>  $faker->sentence(1,true), 
        
    ];
});
