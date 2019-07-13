<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\BookModel::class, function (Faker $faker) {
    return [
        "author_id" => $faker -> randomFloat(0,1,100),
        "title" => $faker ->title,
        "ISBN" => $faker ->randomFloat(0,10,1000),
        "pub_year" => $faker-> year,
        "available" => $faker ->randomFloat(0,1,100),
    ];
});
