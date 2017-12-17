<?php
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
  return [
      'pseudo' => $faker->name,
      'email' => $faker->email,
      'avatar' => $faker->name,
  ];
});
