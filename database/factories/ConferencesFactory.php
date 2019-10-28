<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Conferences;
use Faker\Generator as Faker;

$factory->define(Conferences::class, function (Faker $faker) {

    return [
        'article_title' => $faker->word,
        'author_name' => $faker->word,
        'publish_year' => $faker->word,
        'abstract' => $faker->word,
        'keyword' => $faker->word,
        'location' => $faker->word,
        'organiser' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
