<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nickname' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secreto'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Entities\Question::class, function (Faker\Generator $faker) {
    return [
        'number'  => $faker->numberBetween($min = 1, $max = 10),
        'place' => $faker->address,
        'question' => 'Como te llamas?'
    ];
});

$factory->define(\App\Entities\Answer::class, function (Faker\Generator $faker) {
    return [
        'answer' => 'Si soy yo'
    ];
});

$factory->define(\App\Entities\Data::class, function (Faker\Generator $faker) {
    return [
        'nquestion' => 1,
        'points'    => 0
    ];
});