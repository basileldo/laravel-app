@foreach ($products as $product)
    <div>
        <h2>{{ $product->title }}</h2>
        <p>{{ $product->price }}</p>
        <a href="{{ route('product.detail', $product->sku) }}">View Details</a>
    </div>
@endforeach
