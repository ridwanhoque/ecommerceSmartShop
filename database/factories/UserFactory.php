<?php

use Faker\Generator as Faker;

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

$factory->define(smart_shop\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address'=>$faker->address,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(smart_shop\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
        'category_description'=>$faker->address,
        'publication_status' => $faker->boolean,
    ];
});

$factory->define(smart_shop\Manufacturer::class, function (Faker $faker){
    return [
        'manufacturer_name' => $faker->word,
        'manufacturer_description' => $faker->address,
        'publication_status' => $faker->boolean,
    ];
    
});
