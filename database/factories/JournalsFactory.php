<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Journals;
use Faker\Generator as Faker;

$factory->define(Journals::class, function (Faker $faker) {

    return [
        'author_name' => $faker->word,
        'publish_year' => $faker->word,
        'abstract' => $faker->word,
        'keyword' => $faker->word,
        'publisher' => $faker->word,
        'volume' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
