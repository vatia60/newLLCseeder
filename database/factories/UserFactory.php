<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'book_name' => $faker->title(10),
        'author' => $faker->name,
    ];
});
$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->title(32),
        'content' => $faker->paragraph(32),
    ];
});
$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'category_id' => '1',
        'user_id' => '1',
        'category_name' => $faker->name,
        'slug' => $faker->name,
    ];
});
