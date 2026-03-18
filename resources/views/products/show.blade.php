@extends('layouts.app')

@section('title', $product->name . ' - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-sm">
                        <img
                            src="{{ asset($product->image) }}"
                            alt="{{ $product->name }}"
                            class="object-fit-cover"
                            onerror="this.onerror=null;this.src='{{ asset('images/products/placeholder.svg') }}';"
                        />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <h1 class="h2 fw-bold mb-2">{{ $product->name }}</h1>
                        <p class="text-secondary mb-1">{{ $product->category }}</p>
                        <div class="fs-3 fw-bold text-accent">${{ number_format($product->price, 2) }}</div>
                    </div>

                    <p class="text-secondary mb-4">{{ $product->description }}</p>

                    <form action="{{ route('cart.add') }}" method="POST" class="row g-2 align-items-center">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="col-auto">
                            <label class="visually-hidden" for="quantity">Quantity</label>
                            <input id="quantity" name="quantity" type="number" min="1" value="1" class="form-control form-control-lg bg-black text-white border-secondary" style="width: 90px;">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-accent btn-lg px-4">
                                <i class="fas fa-shopping-cart me-2"></i>Add to cart
                            </button>
                        </div>
                    </form>

                    <div class="mt-5">
                        <h5 class="fw-bold text-white">Product details</h5>
                        <p class="text-secondary">{{ $product->description }}</p>
                    </div>
                </div>
            </div>

            @if($related->count())
                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="h5 fw-bold">You may also like</h3>
                        <a href="{{ route('products.index', ['category' => $product->category]) }}" class="text-accent text-decoration-none">More in {{ $product->category }} <i class="fas fa-chevron-right"></i></a>
                    </div>

                    <div class="row g-4">
                        @foreach($related as $item)
                            <div class="col-12 col-md-6 col-lg-3">
                                @include('products._card', ['product' => $item])
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
