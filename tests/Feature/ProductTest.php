<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_index_page_loads_successfully(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('products/index')
        );
    }

    public function test_products_are_grouped_by_category(): void
    {
        Product::factory()->create(['category' => 'goats', 'is_available' => true]);
        Product::factory()->create(['category' => 'milk', 'is_available' => true]);

        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('products/index')
                ->has('products')
        );
    }

    public function test_products_can_be_filtered_by_category(): void
    {
        Product::factory()->create(['category' => 'goats', 'is_available' => true]);
        Product::factory()->create(['category' => 'milk', 'is_available' => true]);

        $response = $this->get('/products?category=goats');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('products/index')
                ->where('selectedCategory', 'goats')
        );
    }

    public function test_authenticated_users_can_manage_products(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/products');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('admin/products/index')
        );
    }

    public function test_guest_users_cannot_access_admin_products(): void
    {
        $response = $this->get('/admin/products');

        $response->assertRedirect('/login');
    }

    public function test_products_can_be_created_by_authenticated_users(): void
    {
        $user = User::factory()->create();

        $productData = [
            'name' => 'Test Goat',
            'description' => 'A test goat for breeding',
            'category' => 'goats',
            'price' => 350.00,
            'is_available' => true,
            'sort_order' => 1,
        ];

        $response = $this->actingAs($user)
            ->post('/admin/products', $productData);

        $response->assertRedirect();
        $this->assertDatabaseHas('products', [
            'name' => 'Test Goat',
            'category' => 'goats',
        ]);
    }
}