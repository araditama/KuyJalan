<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'user_id' => function(){
        return factory('App\User')->create()->id;
      },
      'wisata_id' => function(){
        return factory('App\TempatWisata')->create()->id;
      },
        'caption' => $faker->paragraph,
        'image' => 'posts/default.jpg',
        'like' => $faker->randomNumber
    ];
});
