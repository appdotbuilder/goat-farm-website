<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Goats
            [
                'name' => 'Nubian Doe - Breeding Quality',
                'description' => 'Premium Nubian doe, excellent for milk production and breeding. Healthy, vaccinated, and well-socialized. Perfect for expanding your herd or starting fresh.',
                'category' => 'goats',
                'price' => 450.00,
                'is_available' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Alpine Buck - Registered',
                'description' => 'Registered Alpine buck with excellent bloodlines. Strong, healthy, and proven breeding record. Great addition to any serious breeding program.',
                'category' => 'goats',
                'price' => 350.00,
                'is_available' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Saanen Doeling - 6 months',
                'description' => 'Young Saanen doeling, 6 months old. Well-bred from high-producing lines. Perfect for 4-H projects or future milking herd.',
                'category' => 'goats',
                'price' => 275.00,
                'is_available' => true,
                'sort_order' => 3,
            ],

            // Milk Products
            [
                'name' => 'Fresh Goat Milk - 1 Gallon',
                'description' => 'Fresh, creamy goat milk from our grass-fed herd. Rich in nutrients and easier to digest than cow milk. Perfect for drinking or cooking.',
                'category' => 'milk',
                'price' => 8.50,
                'is_available' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Raw Goat Milk - Half Gallon',
                'description' => 'Unpasteurized goat milk for those who prefer raw dairy. From our healthy, tested herd. Available for pickup only.',
                'category' => 'milk',
                'price' => 5.00,
                'is_available' => true,
                'sort_order' => 5,
            ],

            // Processed Products
            [
                'name' => 'Artisan Goat Cheese - 8oz',
                'description' => 'Handcrafted goat cheese made fresh on our farm. Creamy texture with a mild, tangy flavor. Perfect for crackers or cooking.',
                'category' => 'processed_products',
                'price' => 12.00,
                'is_available' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Goat Milk Soap - Lavender',
                'description' => 'Luxurious goat milk soap with natural lavender essential oil. Gentle and moisturizing for all skin types. Handmade in small batches.',
                'category' => 'processed_products',
                'price' => 6.50,
                'is_available' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'Greek-Style Goat Yogurt - 16oz',
                'description' => 'Thick, creamy Greek-style yogurt made from our fresh goat milk. High in protein and probiotics. Available in plain or vanilla.',
                'category' => 'processed_products',
                'price' => 7.75,
                'is_available' => true,
                'sort_order' => 8,
            ],

            // Training Services
            [
                'name' => 'Beginner Goat Farming Workshop',
                'description' => 'Full-day workshop covering the basics of goat farming. Learn about housing, feeding, health care, and breeding. Includes lunch and materials.',
                'category' => 'training_services',
                'price' => 125.00,
                'is_available' => true,
                'sort_order' => 9,
            ],
            [
                'name' => 'Advanced Breeding Consultation',
                'description' => 'One-on-one consultation with our breeding expert. Personalized advice for your herd improvement goals. Includes written recommendations.',
                'category' => 'training_services',
                'price' => 85.00,
                'is_available' => true,
                'sort_order' => 10,
            ],
            [
                'name' => 'Farm Visit & Mentoring - Half Day',
                'description' => 'Hands-on learning experience at our farm. Work alongside our team and get practical experience with daily farm operations.',
                'category' => 'training_services',
                'price' => 75.00,
                'is_available' => true,
                'sort_order' => 11,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}