<h4>{{ $category->name }}</h4>

@foreach($category->subcategories as $subcategory)
  <h5 class="mt-3">{{ $subcategory->name }}</h5>
  <div class="row">
    @forelse($subcategory->products as $product)
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          @if($product->images->first())
            <img src="{{ asset('storage/' . $product->images->first()->path) }}" class="card-img-top" alt="{{ $product->title }}">
          @endif
          <div class="card-body">
            <h6>{{ $product->title }}</h6>
            <p>₹{{ number_format($product->regular_price, decimals: 2) }}</p>
          </div>
        </div>
      </div>
    @empty
      <p class="text-muted">No products found.</p>
    @endforelse
  </div>
@endforeach
