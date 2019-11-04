<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text,
        'category_id' => function () {
            // return  factory(Category::class)->create()->id;
            return  factory(Category::class)->rand();
        },
        'user_id' => function () {
            // return  factory(User::class)->create()->id;
            return  factory(User::class)->rand();
        }
    ];
});
