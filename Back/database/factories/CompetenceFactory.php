<?php
$factory->define(App\Models\Competence::class, function (Faker\Generator $faker) {
  return [
      'nom_competence' => $faker->name,

  ];
});
