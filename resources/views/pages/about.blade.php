@extends('layouts.app')

@section('title', 'About Us - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <h1 class="h3 fw-bold">About ProKick Store</h1>
                    <p class="text-secondary">ProKick Store was built for athletes and fans who demand style, performance, and a clean shopping experience. Our goal is to bring premium football and sports gear into one modern destination.</p>
                    <p class="text-secondary">We curate a selection of the best boots, jerseys, balls, gloves, and accessories so you can focus on the game. Every product is chosen with playability, design, and comfort in mind.</p>
                    <p class="text-secondary">Whether you are training for your next match or building your streetwear look, our store provides a crisp and fast experience on every device.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1526406915892-40579591d7e7?auto=format&fit=crop&w=1600&q=80" alt="About ProKick" class="img-fluid rounded shadow-lg" />
                </div>
            </div>

            <div class="mt-5">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card bg-black border-secondary h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">Our Mission</h5>
                                <p class="text-secondary">Deliver a modern shopping experience with high-quality sports gear, minimal UI, and fast navigation for athletes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-black border-secondary h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">Why we exist</h5>
                                <p class="text-secondary">To provide a clean and reliable storefront where sports fans can find gear that looks as good as it performs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-black border-secondary h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">Design Philosophy</h5>
                                <p class="text-secondary">A minimal interface, bold imagery, and a consistent dark theme that helps products stand out, inspired by modern sports brands.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
