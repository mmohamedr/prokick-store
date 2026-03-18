@extends('layouts.app')

@section('title', 'Products - ProKick Store')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
                <div>
                    <h1 class="h3 fw-bold">Products</h1>
                    <p class="text-secondary mb-0">Browse our curated selection of premium sports gear.</p>
                </div>

                <form class="d-flex gap-2" method="GET" action="{{ route('products.index') }}" id="categoryFilterForm">
                    <select name="category" class="form-select form-select-sm bg-black text-white border-secondary" aria-label="Filter by category" id="categorySelect">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" @if(request('category') === $category) selected @endif>{{ $category }}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div class="row g-4">
                @forelse($products as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        @include('products._card', ['product' => $product])
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary">No products were found.</div>
                    </div>
                @endforelse
            </div>

            <div class="mt-5">
                {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

@push('scripts')
<script>
    document.getElementById('categorySelect').addEventListener('change', function() {
        document.getElementById('categoryFilterForm').submit();
    });
</script>
@endpush
@endsection
