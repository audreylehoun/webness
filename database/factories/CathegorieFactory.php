<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cathegorie;
use Faker\Generator as Faker;

$factory->define(Cathegorie::class, function (Faker $faker) {
    return [
        'c_libelle'=>$faker->text,
        'c_description'=>$faker->paragraph,
        'c_parent_id'=>$faker->numberBetween(1,4),
        

    ];
});
