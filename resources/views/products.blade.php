<x-layout>

    @foreach($products as $product)
        <div>
            <a href="{{ route('product', [$product['id']]) }}"><h2>{{ $product['title'] }}</h2></a>
            <p>{{ $product['description'] }}</p>
            <p>{{ $product['category'] }}</p>
            <p>{{ $product['price'] }}</p>
            <img src="{{ $product['thumbnail'] }}" alt="{{ $product['title'] }}">
        </div>
    @endforeach

    <h2>Precio Medio: {{ $average }}</h2>
</x-layout>