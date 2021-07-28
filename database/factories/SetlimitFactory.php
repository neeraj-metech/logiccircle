<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setlimit;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Setlimit::class, function (Faker $faker) {
    return [
        "set_limit" => 3,
    ];
});
