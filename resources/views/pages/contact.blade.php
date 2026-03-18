@extends('layouts.app')

@section('title', 'Contact - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <h1 class="h3 fw-bold">Let's talk</h1>
                    <p class="text-secondary">Have a question about an order or need help choosing the right gear? Send us a message and we'll reply as soon as possible.</p>

                    <div class="card bg-black border-secondary">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" class="form-control bg-black text-white border-secondary" placeholder="Your name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control bg-black text-white border-secondary" placeholder="you@example.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea id="message" rows="5" class="form-control bg-black text-white border-secondary" placeholder="How can we help?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-accent">Send message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-black border-secondary h-100">
                        <div class="card-body">
                            <h4 class="fw-bold">Connect with us</h4>
                            <p class="text-secondary">We are here to support you. Reach out through email or social media.</p>

                            <div class="mb-4">
                                <p class="text-secondary mb-1"><i class="fas fa-envelope me-2"></i>support@prokickstore.com</p>
                                <p class="text-secondary mb-1"><i class="fas fa-phone me-2"></i>+1 800 555 0199</p>
                                <p class="text-secondary"><i class="fas fa-map-marker-alt me-2"></i>Street 123, Sport City</p>
                            </div>

                            <h5 class="fw-bold">Follow us</h5>
                            <div class="d-flex gap-3 mt-2">
                                <a class="btn btn-outline-secondary btn-sm" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                                <a class="btn btn-outline-secondary btn-sm" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
