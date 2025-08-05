<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'client_title' => 'Homesteader',
                'client_company' => 'Mountain View Farm',
                'testimonial' => 'Green Valley Goat Farm has been our go-to source for healthy goats for over 5 years. Their animals are always well-cared for and their expertise has been invaluable to our farming success.',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Mark Thompson',
                'client_title' => 'Chef & Restaurant Owner',
                'client_company' => 'Farm to Table Bistro',
                'testimonial' => 'The goat cheese from Green Valley is absolutely exceptional! Our customers constantly ask where we source it from. The quality and consistency are unmatched.',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Jennifer Martinez',
                'client_title' => 'New Goat Farmer',
                'client_company' => null,
                'testimonial' => 'As a complete beginner, I was nervous about starting with goats. The team at Green Valley provided amazing support and training. I couldn\'t have done it without them!',
                'rating' => 5,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'client_name' => 'Robert Chen',
                'client_title' => 'Dairy Farmer',
                'client_company' => 'Sunrise Dairy',
                'testimonial' => 'I\'ve been working with Green Valley for their breeding consultation services. Their knowledge of genetics and breeding programs has significantly improved our herd quality.',
                'rating' => 5,
                'is_featured' => false,
                'sort_order' => 4,
            ],
            [
                'client_name' => 'Lisa Williams',
                'client_title' => 'Health-Conscious Consumer',
                'client_company' => null,
                'testimonial' => 'The fresh goat milk from Green Valley has been a game-changer for our family. It\'s so much easier on our stomachs than regular milk, and the taste is incredible!',
                'rating' => 5,
                'is_featured' => false,
                'sort_order' => 5,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}