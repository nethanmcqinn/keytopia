@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    @if($products->isEmpty())
        <p>No products available.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach($products as $product)
                <li class="mb-2">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="text-gray-600">Price: ${{ number_format($product->price, 2) }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
