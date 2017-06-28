<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => '',
        'email' => $faker->unique()->safeEmail,
        'password' => '',
        'verified' => false,
        'email_token' => str_random(32),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        }
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
        'name' => $faker->words($nb = 3, $asText = true),
        'description' => $faker->paragraph(3),
        'price' => $faker->randomNumber($nbDigits = 5, $strict = false),
    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker) {

    return [
        'path' => 'asdasd',
        'product_id' => 3
    ];
});

