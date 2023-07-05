<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'        => fake()->name(),
            'slug'  =>  fake()->slug(),
            'seo_keywords'  =>  fake()->paragraph(1),
            'seo_description'      => fake()->paragraph(),
            'description'        => fake()->paragraph(random_int(25, 50)),
            'image_thumbnail'     => fake()->imageUrl(),
            'image_cover'       => fake()->imageUrl(),
            'is_published'  =>  fake()->boolean(),
            'created_by_id'      => User::query()->inRandomOrder()->first()?->id,
            'category_id'       =>  Category::query()->inRandomOrder()->first()?->id,

        ];
    }
}
