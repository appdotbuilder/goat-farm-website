<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\Product>
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['goats', 'milk', 'processed_products', 'training_services']),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'image_url' => null,
            'is_available' => true,
            'sort_order' => $this->faker->numberBetween(1, 100),
        ];
    }

    /**
     * Indicate that the product is unavailable.
     */
    public function unavailable(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_available' => false,
        ]);
    }

    /**
     * Indicate that the product has no price (contact for pricing).
     */
    public function noPrice(): static
    {
        return $this->state(fn (array $attributes) => [
            'price' => null,
        ]);
    }
}