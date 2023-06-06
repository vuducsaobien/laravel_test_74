<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Table4Model;
use App\Http\Models\Table3Model;
use Faker\Generator as Faker;

// use Illuminate\Support\Str;

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

$factory->define(Table4Model::class, function (Faker $faker) {

    $idsTable3      = Table3Model::pluck('id_table_3')->toArray();

    return [
        'name_table_4' => 'table 4 name - ' . Table4Model::$idAuto++,
        'table_4_id_table_3' => $faker->randomElement($idsTable3)

    ];
});
