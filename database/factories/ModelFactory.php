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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Cinema\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Cinema\Book::class,function(\Faker\Generator $faker){

    return[
        'ISBN'=>$faker->randomDigit,
        'title'=>$faker->title,
        'type'=>$faker->city,
        'author_name'=>$faker->name,
        'publisher'=>$faker->domainName,
        'description'=>$faker->name
    ] ;
});

/*$factory->define(Cinema\Author::class,function(\Faker\Generator $faker){

    return[
        'name'=>$faker->name,
    ] ;
});*/