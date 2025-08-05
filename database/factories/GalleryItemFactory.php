<?php

namespace Database\Factories;

use App\Models\GalleryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GalleryItem>
 */
class GalleryItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\GalleryItem>
     */
    protected $model = GalleryItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement(['image', 'video']),
            'file_url' => $this->faker->imageUrl(),
            'thumbnail_url' => null,
            'sort_order' => $this->faker->numberBetween(1, 100),
            'is_featured' => false,
        ];
    }

    /**
     * Indicate that the gallery item is featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    /**
     * Indicate that the gallery item is an image.
     */
    public function image(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'image',
        ]);
    }

    /**
     * Indicate that the gallery item is a video.
     */
    public function video(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'video',
            'thumbnail_url' => $this->faker->imageUrl(),
        ]);
    }
}