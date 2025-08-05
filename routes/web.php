<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
    ]);
})->name('health-check');

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/about', [PageController::class, 'show'])->defaults('slug', 'about');
Route::get('/contact', [PageController::class, 'show'])->defaults('slug', 'contact');
Route::get('/gallery', [PageController::class, 'show'])->defaults('slug', 'gallery');
Route::get('/testimonials', [PageController::class, 'show'])->defaults('slug', 'testimonials');
Route::get('/blog', [PageController::class, 'show'])->defaults('slug', 'blog');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    
    // Admin routes (authenticated)
    Route::prefix('admin')->name('admin.')->group(function () {
        // Pages management
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)->except(['show']);
        
        // Products management
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

// Dynamic pages (must be last to avoid conflicts)
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
