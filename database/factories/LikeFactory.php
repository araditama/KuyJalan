<?php

use Faker\Generator as Faker;

$factory->define(App\Like::class, function (Faker $faker) {
    return [
      'user_id' => function(){
        return factory('App\User')->create()->id;
      },
      'post_id' => function(){
        return factory('App\Post')->create()->id;
      },
    ];
});
