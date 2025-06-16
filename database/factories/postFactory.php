<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class postFactory extends Factory
{
    public function definition(): array
    {
        $status = $this->faker->randomElement(['published', 'draft', 'inactive']);
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(),
            'publication_date' => $status === 'published' ? now() : null,
            'status' => $status,
            'featured_image_url' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'user_id' => User::factory(), // associate with a user
        ];
    }
}