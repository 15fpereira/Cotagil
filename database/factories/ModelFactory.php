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

$factory->define(cotagil\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(cotagil\Produtos::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->firstname,
        'descricao' => $faker->text,
        'id_categoria' => $faker->numberBetween(1, 10),
    ];
});

$factory->define(cotagil\Categorias::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->firstname  
    ];
});

$factory->define(cotagil\Enderecos::class, function (Faker\Generator $faker) {
    return [
        'endereco' => $faker->address,
        'usuario_id' => $faker->numberBetween(1, 100),
        'numero' => $faker->buildingNumber,
        'cep' => $faker->postcode,
        'bairro' => $faker->city,
        'cidade' => $faker->city,
        'estado' => $faker->company,
        'pais' => $faker->country,
    ];
});

