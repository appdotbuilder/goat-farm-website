<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

use App\Models\Product;
use App\Models\Testimonial;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $featuredProducts = Product::available()
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $featuredTestimonials = Testimonial::featured()
            ->orderBy('sort_order')
            ->take(3)
            ->get();



        $recentBlogPosts = BlogPost::published()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return Inertia::render('welcome', [
            'featuredProducts' => $featuredProducts,
            'featuredTestimonials' => $featuredTestimonials,
            'recentBlogPosts' => $recentBlogPosts,
        ]);
    }
}