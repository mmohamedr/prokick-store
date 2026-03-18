<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Show the checkout form.
     */
    public function index()
    {
        $cart = session('cart', []);
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty. Add products before checking out.');
        }

        return view('checkout.index', compact('cart', 'total'));
    }

    /**
     * Place an order.
     */
    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:1000',
        ]);

        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        $order = Order::create([
            'customer_name' => $request->customer_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total_price' => $total,
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('checkout.index')->with('success', 'Thank you! Your order has been received.');
    }
}
