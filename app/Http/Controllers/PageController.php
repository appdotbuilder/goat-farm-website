<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Page;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->active()->firstOrFail();
        
        return Inertia::render('page', [
            'page' => $page
        ]);
    }
}