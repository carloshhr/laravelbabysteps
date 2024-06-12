<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact', [
        'name' => 'Carlos',
        'email' => 'carlos@square1.io',
    ]);
});

Route::get('/products', function() {
    // Hacer Peticion al API para obtener informacion
    $response = Http::get('https://dummyjson.com/products');

    // Todos los productos
    $products = $response->collect('products'); // Collection

    $processedProducts = $products->select(['id', 'title', 'description', 'category', 'price', 'thumbnail']);

    // Necesitamos el Average de los productos (usar metodos de las colecciones) !!!
    $average = $products->avg('price');

    // Pasar informacion a una vista llamada products
    return view('products', [
        'products' => $processedProducts,
        'average' => $average,
    ]);
})->name('products');

Route::get('/products/{id}', function($id) {
    $response = Http::get("https://dummyjson.com/products/$id");

    // Todos los productos
    $product = $response->collect(); // Collection

    return view('product', ['product' => $product]);
})->whereNumber('id')->name('product');