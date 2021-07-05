<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email'=> $faker->unique()->email,
        'title' => $faker->realText(10),
        'content' => $faker->realText(20),
        'content' => $faker->phoneNumber,
    ];
});
