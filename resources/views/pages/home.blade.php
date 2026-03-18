@extends('layouts.app')

@section('title', 'ProKick Store - Home')

@section('content')
    <section class="hero bg-black text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">Find your next match winner.</h1>
                    <p class="lead text-secondary">Shop premium football boots, jerseys, balls and accessories from top brands. Fast shipping &amp; modern styling with a clean sports experience.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-accent btn-lg mt-3">
                        Shop All Products
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1521412644187-c49fa049e84d?auto=format&fit=crop&w=1600&q=80" alt="Sports banner" class="img-fluid rounded shadow-lg" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 fw-bold">Featured Picks</h2>
                <a href="{{ route('products.index') }}" class="text-accent text-decoration-none">View all <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="row g-4">
                @forelse($featured as $product)
                    <div class="col-12 col-md-6 col-lg-3">
                        @include('products._card', ['product' => $product])
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary">No products found.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-5 bg-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="h3 fw-bold">Shop by Category</h2>
                <p class="text-secondary">Browse collections tailored for every position and style.</p>
            </div>

            <div class="row g-3 justify-content-center">
                @foreach($categories as $category)
                    <div class="col-6 col-sm-4 col-md-3">
                        <a href="{{ route('products.index', ['category' => $category]) }}" class="category-card d-flex flex-column align-items-center justify-content-center text-center p-4 rounded-4 text-decoration-none">
                            <div class="category-icon mb-3">
                                <i class="fas fa-circle-notch fa-2x"></i>
                            </div>
                            <div class="fw-semibold text-white">{{ $category }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
