<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Chocolate;
use Faker\Generator as Faker;

$factory->define(Chocolate::class, function (Faker $faker) {
    return [
      'name'          => $faker -> company(),
      'types'         => $faker -> word(),
      'description'   => $faker -> text(),
      'calory'        => $faker -> numberBetween($min = 230, $max = 9000),
      'price'         => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50)
    ];
});
