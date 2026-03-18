<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Show the cart overview.
     */
    public function index()
    {
        $cart = session('cart', []);
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return view('cart.index', compact('cart', 'total'));
    }

    /**
     * Add a product to the cart.
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $quantity = (int) $request->input('quantity', 1);

        $cart = session('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => $quantity,
            ];
        }

        session(['cart' => $cart]);

        return back()->with('success', "'{$product->name}' has been added to your cart.");
    }

    /**
     * Update cart item quantities.
     */
    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
        ]);

        $cart = session('cart', []);
        $productId = $request->product_id;

        if (! isset($cart[$productId])) {
            return back()->with('error', 'The item you are trying to update is not in the cart.');
        }

        $quantity = (int) $request->quantity;

        if ($quantity === 0) {
            unset($cart[$productId]);
        } else {
            $cart[$productId]['quantity'] = $quantity;
        }

        session(['cart' => $cart]);

        return back()->with('success', 'Your cart has been updated.');
    }

    /**
     * Remove an item from the cart.
     */
    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $cart = session('cart', []);
        $productId = $request->product_id;

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session(['cart' => $cart]);
        }

        return back()->with('success', 'Item removed from cart.');
    }
}
