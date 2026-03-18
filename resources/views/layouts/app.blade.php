<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ProKick Store')</title>
    <!-- Inter Font from Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @stack('styles')
</head>
<body class="bg-dark text-white">
    <header class="border-bottom border-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <span class="fs-4 fw-bold">ProKick</span>
                    <span class="ms-2 text-accent fw-bold">Store</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="ms-1 d-none d-lg-inline">Cart</span>
                                @php
                                    $cart = session('cart', []);
                                    $count = collect($cart)->sum('quantity');
                                @endphp
                                @if($count > 0)
                                    <span class="badge bg-accent text-dark rounded-pill ms-1">{{ $count }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="min-vh-100">
        @if(session('success'))
            <div class="container py-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="container py-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-black text-white py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <h5 class="text-white">ProKick Store</h5>
                    <p class="text-secondary">A modern sports shop built with Laravel. Find your next kit, boot, or ball with a sleek and clean shopping experience.</p>
                </div>
                <div class="col-md-2">
                    <h6 class="text-white">Explore</h6>
                    <ul class="list-unstyled">
                        <li><a class="text-secondary text-decoration-none" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-secondary text-decoration-none" href="{{ route('products.index') }}">Products</a></li>
                        <li><a class="text-secondary text-decoration-none" href="{{ route('about') }}">About</a></li>
                        <li><a class="text-secondary text-decoration-none" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-white">Contact</h6>
                    <p class="text-secondary mb-1"><i class="fas fa-envelope me-2"></i>support@prokickstore.com</p>
                    <p class="text-secondary mb-1"><i class="fas fa-phone me-2"></i>+1 800 555 0199</p>
                    <p class="text-secondary"><i class="fas fa-map-marker-alt me-2"></i>Sports Avenue, City Center</p>
                </div>
                <div class="col-md-3">
                    <h6 class="text-white">Follow Us</h6>
                    <div class="d-flex gap-3">
                        <a class="text-secondary fs-5" href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="text-secondary fs-5" href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a class="text-secondary fs-5" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="text-secondary fs-5" href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <div class="border-top border-secondary mt-4 pt-3 text-center text-secondary">
                &copy; {{ date('Y') }} ProKick Store. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
