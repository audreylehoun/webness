<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'p_libelle' => $faker->sentence(2,true), 
        'p_description' => $faker->paragraph,
        'p_prixancien' =>  $faker->randomFloat(2, 0, 1),
        'p_image1' =>  $faker->imageUrl($width = 200, $height = 200),
        'p_image2' =>  $faker->imageUrl($width = 200, $height = 200),
        'p_cathegorie_id'=>$faker->numberBetween(1,5),
    ];
});
