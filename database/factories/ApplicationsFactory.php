<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\OperativeSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'operative_system_id' => OperativeSystem::factory()->create(),
            'category_id' => Category::factory()->create(),
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            'image' => $this->faker->imageUrl,
            'link' => $this->faker->url,
            'version' => $this->faker->word,
            'star' => $this->faker->randomElement([1,2,3,4,5]),
            'active' => $this->faker->randomElement([true, false]),
        ];
    }
}
