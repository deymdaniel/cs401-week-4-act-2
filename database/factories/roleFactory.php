<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class roleFactory extends Factory
{
    public function definition(): array
    {
        $roles = [
            ['role_name' => 'Admin', 'description' => 'Administrator with full access'],
            ['role_name' => 'Contributor', 'description' => 'Can write and edit own posts'],
            ['role_name' => 'Subscriber', 'description' => 'Can read and comment on posts'],
        ];
        return $this->faker->randomElement($roles);
    }
}