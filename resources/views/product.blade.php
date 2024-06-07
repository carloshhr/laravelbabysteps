<x-layout>
    <div>
        <h1>{{ $product['title'] }}</h1>
        <p>{{ $product['description'] }}</p>
        <p>{{ $product['category'] }}</p>
        <p>{{ $product['price'] }}</p>
        <img src="{{ $product['thumbnail'] }}" alt="{{ $product['title'] }}">
    </div>
</x-layout>