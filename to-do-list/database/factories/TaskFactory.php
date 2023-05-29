<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all()->random();
        $user = $category->user;

        return [
            'title' => fake()->title(),
            'due_date' => fake()->dateTime(),
            'description' => fake()->text(),
            'user_id' => $user,
            'category_id' => $category,
            'is_done' => fake()->boolean()
        ];
    }
}
