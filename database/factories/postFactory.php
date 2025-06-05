<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['published', 'draft', 'inactive']);
        $title = fake()->title();
        return [
            "title"=> $title,
            "slug"=> Str::slug($title),
            "content"=> fake()->paragraph(),
            "publication_date"=> $status == 'published' ?  now() : null,
            "status"=> $status,
            "featured_image_url"=> fake()->imageUrl(640, 480, 'cats', true, 'Faker'),
        ];
    }
}
