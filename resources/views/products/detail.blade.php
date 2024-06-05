<h1>{{ $product->title }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->price }}</p>
<img src="{{ $product->image }}" alt="{{ $product->title }}">
<a href="{{ route('home') }}">Back to Home</a>
