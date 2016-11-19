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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    $min = App\User::min('id');
    $max = App\User::max('id');

    return [
    	'user_id' => $faker->numberBetween($min, $max), //User 테이블의 ID값 기준으로 생성함
        'name' => $faker->word, //문자열 데이터 임의로 생성 
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    $min = App\Project::min('id');
    $max = App\Project::max('id');

    return [
    	'project_id' => $faker->numberBetween($min, $max), //User 테이블의 ID값 기준으로 생성함
        'name' => $faker->word, //문자열 데이터 임의로 생성 
        'description' => $faker->text,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Thumbnail::class, function (Faker\Generator $faker) {

    return [
    	'thumbnail_id' => $faker->randomDigit, //Thumbnail 테이블의 ID값 기준으로 생성함
    	'title' => $faker->word,
        'description' => $faker->sentence($nbWords = 10, $variableNbWords = true), //문자열 데이터 임의로 생성
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Image::class, function (Faker\Generator $faker) {

    return [
    	'images_id' => $faker->randomDigit, //User 테이블의 ID값 기준으로 생성함
    	'title' => $faker->word,
        'description' => $faker->sentence($nbWords = 10, $variableNbWords = true), //문자열 데이터 임의로 생성
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {

    return [
    	'menu_id' => $faker->randomDigit, //User 테이블의 ID값 기준으로 생성함
    	'navi' => $faker->word,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});

$factory->define(App\Info::class, function (Faker\Generator $faker) {

    return [
    	'info_id' => $faker->randomDigit, //User 테이블의 ID값 기준으로 생성함
    	'email' => $faker->email,
    	'address' => $faker->address,
    	'phone' => $faker->phoneNumber,
    	'fax' => $faker->tollFreePhoneNumber,
    	'hours' => $faker->amPm($max = 'now'),
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),

    ];
});
