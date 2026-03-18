<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application landing page.
     */
    public function index()
    {
        $featured = Product::inRandomOrder()->limit(8)->get();
        $categories = Product::select('category')
            ->distinct()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->pluck('category');

        return view('pages.home', compact('featured', 'categories'));
    }
}
