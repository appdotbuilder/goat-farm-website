<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\Testimonial>
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'client_title' => $this->faker->jobTitle(),
            'client_company' => $this->faker->company(),
            'testimonial' => $this->faker->paragraph(),
            'client_photo' => null,
            'rating' => $this->faker->numberBetween(4, 5),
            'is_featured' => false,
            'sort_order' => $this->faker->numberBetween(1, 100),
        ];
    }

    /**
     * Indicate that the testimonial is featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }
}