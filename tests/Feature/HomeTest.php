<?php

namespace Tests\Feature;

use App\Models\BlogPost;

use App\Models\Product;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('welcome')
        );
    }

    public function test_home_page_includes_featured_data(): void
    {
        // Create test data
        $product = Product::factory()->create(['is_available' => true]);
        $testimonial = Testimonial::factory()->featured()->create();

        
        $user = User::factory()->create();
        $blogPost = BlogPost::factory()->create([
            'status' => 'published',
            'published_at' => now(),
            'user_id' => $user->id,
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('welcome')
                ->has('featuredProducts')
                ->has('featuredTestimonials')
                ->has('recentBlogPosts')
        );
    }
}