@extends('layouts.app')

@section('title', 'Checkout - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <h1 class="h3 fw-bold mb-4">Checkout</h1>

                    <div class="card bg-black border-secondary">
                        <div class="card-body">
                            <form action="{{ route('checkout.placeOrder') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label for="customer_name" class="form-label">Full Name</label>
                                    <input type="text" id="customer_name" name="customer_name" class="form-control bg-black text-white border-secondary @error('customer_name') is-invalid @enderror" value="{{ old('customer_name') }}">
                                    @error('customer_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control bg-black text-white border-secondary @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control bg-black text-white border-secondary @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Shipping Address</label>
                                    <textarea id="address" name="address" rows="4" class="form-control bg-black text-white border-secondary @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-accent btn-lg w-100">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card bg-black border-secondary">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Order summary</h5>

                            @foreach($cart as $item)
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <div class="fw-semibold">{{ $item['name'] }}</div>
                                        <div class="text-secondary small">Qty: {{ $item['quantity'] }}</div>
                                    </div>
                                    <div class="text-white">${{ number_format($item['price'] * $item['quantity'], 2) }}</div>
                                </div>
                            @endforeach

                            <hr class="border-secondary">

                            <div class="d-flex justify-content-between fw-bold fs-5">
                                <span>Total</span>
                                <span>${{ number_format($total, 2) }}</span>
                            </div>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mt-4">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
