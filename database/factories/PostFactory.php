<?php

namespace Database\Factories;

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
            'cover image'  =>  fake()-> imageUrl(),
            'description'  =>  fake()->paragraph(),
            'is paid'      => fake()->boolean(),
            'price'        =>fake()->randomFloat(2,0,500),
            'start_at'     => fake()->now(),
            'end_at'       => fake()->dateThisMonth(),
            'category_id'  =>  1,
            'user_id'      =>1,
            'status'       =>  fake()->randomElement(['approved','pending','rejected' ]),
            
        ];
    }
}
