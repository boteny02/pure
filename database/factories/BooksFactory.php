<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'author_name' => $faker->word,
        'publish_year' => $faker->word,
        'publisher' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
