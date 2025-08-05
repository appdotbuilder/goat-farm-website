<?php

namespace Tests\Feature;

use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function test_active_pages_can_be_viewed(): void
    {
        $page = Page::factory()->create([
            'slug' => 'test-page',
            'title' => 'Test Page',
            'is_active' => true,
        ]);

        $response = $this->get('/test-page');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('page')
                ->has('page')
        );
    }

    public function test_inactive_pages_return_404(): void
    {
        Page::factory()->create([
            'slug' => 'inactive-page',
            'is_active' => false,
        ]);

        $response = $this->get('/inactive-page');

        $response->assertStatus(404);
    }

    public function test_authenticated_users_can_manage_pages(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/pages');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('admin/pages/index')
        );
    }

    public function test_guest_users_cannot_access_admin_pages(): void
    {
        $response = $this->get('/admin/pages');

        $response->assertRedirect('/login');
    }

    public function test_pages_can_be_created_by_authenticated_users(): void
    {
        $user = User::factory()->create();

        $pageData = [
            'slug' => 'new-page',
            'title' => 'New Page',
            'content' => '<p>This is a new page content</p>',
            'is_active' => true,
        ];

        $response = $this->actingAs($user)
            ->post('/admin/pages', $pageData);

        $response->assertRedirect();
        $this->assertDatabaseHas('pages', [
            'slug' => 'new-page',
            'title' => 'New Page',
        ]);
    }

    public function test_static_pages_load_correctly(): void
    {
        Page::factory()->create([
            'slug' => 'about',
            'title' => 'About Us',
            'is_active' => true,
        ]);

        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => 
            $page->component('page')
        );
    }
}