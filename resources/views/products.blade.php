<x-layout>

    @foreach($products as $product)
        <div>
            <h2>{{ $product['title'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <p>{{ $product['category'] }}</p>
            <p>{{ $product['price'] }}</p>
            <img src="{{ $product['thumbnail'] }}" alt="{{ $product['title'] }}">
        </div>
    @endforeach
</x-layout>