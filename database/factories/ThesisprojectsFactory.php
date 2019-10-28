<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Thesisprojects;
use Faker\Generator as Faker;

$factory->define(Thesisprojects::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'matric' => $faker->word,
        'candidate_name' => $faker->word,
        'grad_year' => $faker->word,
        'abstract' => $faker->word,
        'keyword' => $faker->word,
        'supervisor' => $faker->word,
        'dept' => $faker->word,
        'faculty' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
