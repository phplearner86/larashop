<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {

    return [
        'category_id' => function(){
            factory(App\Category::class)->create()->id;
        },
        'name' => $faker->word,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    return [
        'group_id' => function(){
            factory(App\Group::class)->create()->id;
        },
        'name' => $faker->sentence,
        'description' => $faker->paragraph(3),
        'price' => $faker->randomNumber($nbDigits = 7, $strict = false),
    ];
});

