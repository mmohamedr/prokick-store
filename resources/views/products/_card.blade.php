<div class="card h-100 bg-black border-0 shadow-sm hover-lift">
    <div class="overflow-hidden rounded-top" style="height: 200px;">
        <img
            src="{{ asset($product->image) }}"
            alt="{{ $product->name }}"
            class="w-100 h-100 object-fit-cover"
            onerror="this.onerror=null;this.src='{{ asset('images/products/placeholder.svg') }}';"
        />
    </div>
    <div class="card-body">
        <h3 class="h6 card-title text-white">{{ $product->name }}</h3>
        <p class="text-secondary small mb-2">{{ $product->category }}</p>
        <div class="d-flex align-items-center justify-content-between">
            <span class="fw-bold text-white">${{ number_format($product->price, 2) }}</span>
            <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="btn btn-sm btn-outline-light">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </form>
        </div>
    </div>
</div>
