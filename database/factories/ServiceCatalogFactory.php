<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceCatalog>
 */
class ServiceCatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(),
            "thumbnail_url" => $this->faker->imageUrl(),
            "order" => $this->faker->numberBetween(0, 100),
            "is_active" => $this->faker->boolean(),
        ];
    }
}
