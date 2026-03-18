@extends('layouts.app')

@section('title', 'Shopping Cart - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start mb-4">
                <h1 class="h3 fw-bold">Your Cart</h1>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light">Continue shopping</a>
            </div>

            @if(empty($cart))
                <div class="alert alert-secondary">Your cart is empty. Add products to get started.</div>
            @else
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle text-white">
                                <thead class="border-bottom border-secondary">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col" class="text-center">Qty</th>
                                        <th scope="col" class="text-end">Price</th>
                                        <th scope="col" class="text-end">Subtotal</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="rounded-3" style="width: 90px; height: 90px; object-fit: cover;">
                                                    <div>
                                                        <div class="fw-bold">{{ $item['name'] }}</div>
                                                        <div class="text-secondary small">{{ $item['quantity'] }} x ${{ number_format($item['price'], 2) }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('cart.update') }}" method="POST" class="d-inline-flex align-items-center gap-2">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                    <input type="number" min="0" name="quantity" value="{{ $item['quantity'] }}" class="form-control form-control-sm text-center bg-black text-white border-secondary" style="width: 80px;">
                                                    <button class="btn btn-sm btn-outline-light" type="submit"><i class="fas fa-check"></i></button>
                                                </form>
                                            </td>
                                            <td class="text-end">${{ number_format($item['price'], 2) }}</td>
                                            <td class="text-end">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                            <td class="text-end">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card bg-black border-secondary">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Order Summary</h5>
                                <div class="d-flex justify-content-between text-secondary">
                                    <span>Subtotal</span>
                                    <span>${{ number_format($total, 2) }}</span>
                                </div>
                                <div class="d-flex justify-content-between text-secondary">
                                    <span>Shipping</span>
                                    <span>Free</span>
                                </div>
                                <hr class="border-secondary">
                                <div class="d-flex justify-content-between fw-bold fs-5">
                                    <span>Total</span>
                                    <span>${{ number_format($total, 2) }}</span>
                                </div>

                                <a href="{{ route('checkout.index') }}" class="btn btn-accent btn-lg w-100 mt-4">
                                    Checkout
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
