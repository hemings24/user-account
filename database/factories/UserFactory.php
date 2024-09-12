<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
   public function definition()
   {
      return[
         'first_name'        => $this->faker->firstName(),
         'last_name'         => $this->faker->lastName(),
         'company'           => $this->faker->company(),
         'email'             => $this->faker->unique()->safeEmail(),
         'email_verified_at' => now(),
         'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
         'remember_token'    => Str::random(10),
      ];
   }

   public function unverified()
   {
      return $this->state(function(array $attributes){
         return[
            'email_verified_at' => null,
         ];
      });
   }
}