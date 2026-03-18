<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $products = $query->orderBy('name')->paginate(12);
        $categories = Product::select('category')
            ->distinct()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->pluck('category');

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Display a single product.
     */
    public function show(Product $product)
    {
        $related = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        return view('products.show', compact('product', 'related'));
    }
}
