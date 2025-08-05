<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::available()->orderBy('sort_order');
        
        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }
        
        $products = $query->get()->groupBy('category');
        
        return Inertia::render('products/index', [
            'products' => $products,
            'selectedCategory' => $request->category
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return Inertia::render('products/show', [
            'product' => $product
        ]);
    }
}